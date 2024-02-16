<?php

namespace App\Http\Controllers\app;

use App\Events\RoomEvent;
use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\Chat;
use App\Models\Place;
use App\Models\Room;
use App\Models\User;
use http\Message;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function actionLastActive(): void
    {
        $user_id = Session::get('user_id');
        $user = User::find($user_id);
        $user->last_activity_at = now();
        $user->save();

    }

}
