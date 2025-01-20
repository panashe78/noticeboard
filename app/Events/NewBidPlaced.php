<?php

// app/Events/NewBidPlaced.php

namespace App\Events;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewBidPlaced
{
    use Dispatchable, SerializesModels;

    public $auction;
    public $newBid;

    public function __construct(Auction $auction, Bid $newBid)
    {
        $this->auction = $auction;
        $this->newBid = $newBid;
    }
}