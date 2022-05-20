<?php

namespace App\Notifications;

use App\Channels\FcmChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;

class WinnerNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $public;
    public $title;
    public $body;
    public $spanned_text;
    public $client_id;
    public $blog_id;

    public function __construct(
        $public,
        $title,
        $body,
        $spanned_text,
        $client_id,
        $blog_id
    )
    {
        $this->public = $public;
        $this->title = $title;
        $this->body = $body;
        $this->spanned_text = $spanned_text;
        $this->client_id = $client_id;
        $this->blog_id = $blog_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [FcmChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toFcm($notifiable)
    {
        return [
            'public' => $this->public,
            'title' => $this->title,
            'body' => $this->body,
            'spanned_text' => $this->spanned_text,
            'client_id' => $this->client_id,
            'blog_id' => $this->blog_id,
            'fcm_id' => $notifiable->fcm_id,
            'apn_id' => $notifiable->apn_id,
        ];
    }
}
