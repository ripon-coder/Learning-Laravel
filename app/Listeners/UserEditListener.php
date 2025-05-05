<?php

namespace App\Listeners;

use App\Events\UserEditEvent;
use App\Mail\UserEditMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserEditListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserEditEvent $event): void
    {
        Mail::to($event->user->email)->send(new UserEditMail($event->user));
    }
}
