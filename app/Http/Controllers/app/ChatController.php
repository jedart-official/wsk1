<?php

namespace App\Http\Controllers\app;

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
use Illuminate\Support\Facades\Session;


class ChatController extends Controller
{

    public function sendMessage(Request $request)
    {
        $user_id = Session::get('user_id');

        $user = User::find($user_id);

        $message = $request->input('message');

        $isExistChat = Chat::query()->where(['room_id' => $user->room_id])->first();

        if($isExistChat){
            return response()->json(['Чат существует']);
        }else  {
            $chat = Chat::query()->create(['room_id' => $user->room_id]);
            \App\Models\Message::query()->create([
                'user_id' => $user->id,
                'text' => $message,
                'chat_id' => $chat->id,
            ]);
            return response()->json(['status' => $user->room_id, 'message' => 'Has been sent']);
        }
    }
}
