<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPassword extends Mailable {

    use Queueable, SerializesModels;

    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function build() {

        return $this->subject("forget_password")->from($address = 'info@pizza.com' , $name = 'robin pizza')
            ->view('mail.forget_password', [
                'data' => [
                    "message" => $this->link
                ],
            ])->withSwiftMessage(function ($message) {
                $message->getHeaders()
                    ->addTextHeader('List-Unsubscribe', 'https://pizza.com/unsubscribe');
            });
    }
}

