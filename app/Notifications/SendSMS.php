<?php

namespace App\Notifications;

use App\Channels\SmsChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSMS extends Notification implements ShouldQueue
{
    use Queueable;

    public $phone;
    public $message;
    public $send;

    public function __construct($phone, $message , $send = false)
    {
        $this->phone = $phone;
        $this->message = $message;
        $this->send = $send;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmsChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toSMS($notifiable)
    {
        return [
            'phone' => $this->phone,
            'message' => $this->message,
            'send' => $this->send
        ];
    }
}
