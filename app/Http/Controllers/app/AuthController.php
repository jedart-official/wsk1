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
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function __invoke(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $id = Session::get('user_id');
        if($id){
            $user = User::query()->with('avatar')->find($id);
            dd(now()->subMinutes());

            if ($user->last_activity_at > now()->subMinutes()){
                $user->delete();
                Session::forget(['user_id']);
            }

            $rooms = Room:: all();
            $rooms->load('places.user');


            $takenPlaces = Place::query()->whereNotNull(['user_id'])->with('user.avatar')->get()->toArray();
            $takenPlacesInfo = array_map(function ($place){
                return [
                    'user_id' => $place['user']['id'],
                    'x' => $place['user']['x'],
                    'y' => $place['user']['y'],
                    'name' => $place['user']['name'],
                    'imagePath' =>  $place['user']['avatar']['path'],
                ] ;
            }, $takenPlaces);

        } else {
            $user = null;
        }
        return view('welcome', [
            'avatars' => Avatar::all(),
            'user' => $user,
            'rooms' => $rooms ?? null,
            'places' => $takenPlacesInfo ?? null,
        ],);
    }
}
