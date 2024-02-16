<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\Place;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Random\RandomException;


class RegisterController extends Controller
{
    /**
     * @throws RandomException
     */
    public function __invoke(Request $request)
    {
        $user = User::query()->create([
            'name' => $request['username'],
            'avatar_id' => $request['avatar'],
            'last_activity_at' => now(),
        ]);
        if ($user) {
            Session::put('user_id', $user->id);
            $avialablePlace = Place::query()->whereNull(['user_id'])->get()->random();
            $avialablePlace->user_id = $user->id;
            $avialablePlace->save();
            return redirect('/');
        } else {
            dd('error');
        }
    }
}
