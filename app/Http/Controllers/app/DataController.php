<?php

namespace App\Http\Controllers\app;

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


class DataController extends Controller
{

    public function actionRoom(): JsonResponse
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

        return response()->json($result);
    }
    public function actionPosition(): JsonResponse
    {
        $users = User::query()->whereNotNull(['x', 'y'])->with('avatar')->get()->toArray();

        $places = [];

        foreach ($users as $user) {
            $places[] = [
                'user_id' => $user['id'],
                'x' => $user['x'],
                'y' => $user['y'],
                'imagePath' => $user['avatar']['path'],
            ];
        }

        return response()->json([
            'status' => true,
            'places' => $places
        ]);
    }
}
