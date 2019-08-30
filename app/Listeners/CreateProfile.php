<?php

namespace App\Listeners;

use App\Profile;
use App\Location;
use App\Status;


use App\Events\Registration;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
{
    /**
     

    /**
     * Handle the event.
     *
     * @param  Registration  $event
     * @return void
     */
    public function handle(Registration $event)
    {
        $profile = Profile::create([
            'user_id' => $event->user->id,
        ]);

        $location = Location::create([
            'user_id' => $event->user->id,
        ]);

        $status = Status::create([
            'user_id' => $event->user->id,
        ]);


        // return $event->user->id;
    }
}
