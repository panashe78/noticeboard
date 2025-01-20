<?php

// app/Listeners/SendNewBidNotification.php

namespace App\Listeners;

use App\Events\NewBidPlaced;
use App\Notifications\NewBidNotification;

class SendNewBidNotification
{
    public function handle(NewBidPlaced $event)
    {
        $previousBid = $event->auction->highestBid();

        if ($previousBid) {
            $previousBid->user->notify(new NewBidNotification($event->auction, $previousBid));
        }
    }
}