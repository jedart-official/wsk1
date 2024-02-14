<?php

namespace App\Http\Controllers\app;

use App\Events\ChangePositionEvent;
use App\Events\RoomEvent;
use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\Place;
use App\Models\Room;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PlaceController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {

        $user_id = Session::get('user_id');
        $room_id = $request->input('roomId');
        $pointX = $request->input('x');
        $pointY = $request->input('y');

        $room = Room::query()->find($room_id);

        if (!$room) {
            return response()->json(['status' => false, 'message' => 'Room not found']);
        }

        $isAllowRoom = Place::query()->where(['room_id' => $room_id, 'user_id' => null])->first();

        if (!$isAllowRoom) {
            return response()->json(['status' => false, 'message' => 'Room is taken']);
        }

        $old_place = Place::query()->where(['user_id' => $user_id])->first();
        if ($old_place) {
            $old_place->user_id = null;
            $old_place->save();
        }


        $isAllowRoom->user_id = $user_id;
        $isAllowRoom->save();
        $user = User::query()->with('avatar')->find($user_id);
        $user->x = $pointX;
        $user->y = $pointY;

        if($user->room_id != $room_id){
            $user->room_id = $room_id;
            $rooms = $this->getRooms();
            event(new RoomEvent($rooms));
        }



        $user->save();
        event(new ChangePositionEvent($user_id, $pointX, $pointY, $user->avatar->path, $user->room_id, $user->name));
        return response()->json(['status' => true, 'message' => 'Success']);
    }


    private function getRooms(): array
    {
        $rooms = Room::all();
        $rooms->load('places.user.avatar');
        $result = [];

        foreach ($rooms as $room){
            $roomId = $room->id;
            $roomUsers = [];

            foreach ($room->places as $place){
                if($place->user){
                    $user = $place->user;
                    $roomUsers[] = [
                        'name' => $user->name,
                        'imagePath'=> $user->avatar->path
                    ];
                }
            }
            $result[] = [
                'id' => $roomId,
                'places' => count($room->places),
                'name' => $room->name,
                'users' => $roomUsers,
            ];
        }

        return $result;
    }
}
