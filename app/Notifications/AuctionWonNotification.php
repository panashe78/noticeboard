<?php

// app/Notifications/AuctionWonNotification.php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AuctionWonNotification extends Notification
{
    use Queueable;

    protected $auction;

    public function __construct($auction)
    {
        $this->auction = $auction;
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // Send email and save to database
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('You Won the Auction!')
            ->line('Congratulations! You have won the auction for ' . $this->auction->item)
            ->action('View Auction', route('auctions.show', $this->auction));
    }

    public function toDatabase($notifiable)
    {
        return [
            'auction_id' => $this->auction->id,
            'message' => 'Congratulations! You have won the auction for ' . $this->auction->item,
        ];
    }
}