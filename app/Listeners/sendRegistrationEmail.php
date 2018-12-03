<?php

namespace App\Listeners;

use App\Events\UserWasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendRegistrationEmail
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasRegistered  $event
     * @return void
     */
    public function handle(UserWasRegistered $event)
    {

        Mail::raw('You have been successfully registered to the site', function ($message) use ($event) {
            $message->to($event->userAccount->email);
            $message->subject('Welcome');
        });

    }
}
//{
//    protected $mailer;
//    /**
//     * Create the event listener.
//     *
//     * @return void
//     */
//    public function __construct(AppMailer $mailer)
//    {
//        $this->mailer = $mailer;
//    }
//
//    /**
//     * Handle the event.
//     *
//     * @param  UserWasRegistered  $event
//     * @return void
//     */
//    public function handle(UserWasRegistered $event)
//    {
//        $this->mailer->sendWelcomeEmailTo($event->user->email);
//    }
//}
