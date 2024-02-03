<?php

namespace App\Http\Controllers\app;

use App\Events\ChangePositionEvent;
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
        $user = User::query()->find($user_id);
        $user->x = $pointX;
        $user->y = $pointY;
        $user->room_id = $room_id;
        $user->save();
        return response()->json(['status' => true, 'message' => 'Success']);
    }
}
