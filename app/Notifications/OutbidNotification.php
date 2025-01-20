<?php

// app/Notifications/OutbidNotification.php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;

class OutbidNotification extends Notification
{
    use Queueable;

    protected $auction;

    public function __construct($auction)
    {
        $this->auction = $auction;
    }

    public function via($notifiable)
    {
        return ['database']; // Save notifications in the database
    }

    public function toDatabase($notifiable)
    {
        return [
            'auction_id' => $this->auction->id,
            'message' => 'You have been outbid on the auction for ' . $this->auction->item,
        ];
    }
}