<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function sendMail(){
        return view('testmail');
    }
    public function sendNow(){
        for ($i=0; $i < 2; $i++) { 
            $details['email'] = 'your_email@gmail.com';
            $details['value'] = $i;
            dispatch(new SendEmailJob($details));
        }

    }
}
