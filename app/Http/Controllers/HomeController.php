<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Jobs\SendMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::firstOrFail();
        //Mail::to($user->email)->send(new WelcomeMail($user));
        //dispatch(new SendMail($user));
        event(new UserRegistered($user));
    }
}
