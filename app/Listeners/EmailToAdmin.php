<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
class EmailToAdmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        Mail::send('email_contact', Session('data'), function($message) {
        $message->to('abhinav.cse12@gmail.com')->subject('Admin | New Query from Motivational Quote');
        $message->from('learnforwardglobe@gmail.com');
        });
    }
}
