<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 20/01/19
 * Time: 5:09 PM
 */

namespace App\Channels;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class FcmChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toFcm($notifiable);

        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array(
            $message['public'] ? 'to' :  'registration_ids' =>  $message['public'] ? '/topics/all' :  array($message['fcm_id'], $message['apn_id']),
            'data'             => array(
                'title'  => $message['title'],
                'body' => $message['body'],
                'spanned_text' => $message['spanned_text'],
                'blog_id' => $message['blog_id']
            ),
            'android'          => array(
                "priority"     => "high",
                'notification' => array(
                    "priority" => "high",
                    "title" => "title"
                )
            )
        );
        $fields = json_encode( $fields );

        $headers = array(
            'Authorization: key=' . config('Constants.FCM_API'),
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields );
        $res = curl_exec( $ch );
        curl_close( $ch );

        $res = json_decode($res, true);

        Log::debug($res);

//        return $res;
    }
}
