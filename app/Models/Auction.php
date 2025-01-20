<?php

// app/Models/Auction.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function highestBid()
    {
        return $this->bids()->orderBy('amount', 'desc')->first();
    }
}