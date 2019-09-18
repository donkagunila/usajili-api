<?php

namespace App\Listeners;

use App\Profile;
use App\Location;
use App\Status;
use app\User;


use App\Events\Disabled;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteProfile
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
     * @param  Disabled  $event
     * @return void
     */
    public function handle(Disabled $event)
    {
        

        // delete profile
        Profile::find($event->user->profile->id)->delete();

        // detele status
        Status::find($event->user->status->id)->delete();

        // delete location
        Location::find($event->user->location->id)->delete();

        // delete user
        User::find($event->user->id)->delete();

    }
}
