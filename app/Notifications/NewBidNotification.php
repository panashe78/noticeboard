<?php

// app/Notifications/NewBidNotification.php

// app/Notifications/NewBidNotification.php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBidNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $auction;
    protected $newBid;

    public function __construct($auction, $newBid)
    {
        $this->auction = $auction;
        $this->newBid = $newBid;
    }

    public function via($notifiable)
    {
        return ['mail'];  // Only send via email
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('You have been outbid!')
            ->line('You have been outbid on the auction for ' . $this->auction->item)
            ->line('The new bid is: ' . $this->newBid->amount)
            ->action('View Auction', route('auctions.show', $this->auction));
    }
}