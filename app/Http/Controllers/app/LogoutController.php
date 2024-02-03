<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;


class LogoutController extends Controller
{
    public function __invoke(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $id = Session::get('user_id');
        if ($id) {
            User::query()->find($id)->delete();
            \session()->flush();
        }
        return redirect('/');
    }
}
