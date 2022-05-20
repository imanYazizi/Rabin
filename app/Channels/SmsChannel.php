<?php

namespace App\Channels;

use App\Models\Sms;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class SmsChannel
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

        $details = $notification->toSMS($notifiable);

        $response = Kavenegar($details['phone'], $details['message'] , $details['send']);

        switch (setting('admin.messaging_credit')){
            case 10:
                $message = 'وضعیت اضطراری: اعتبار ارسال پیامک شما در پنل برناپی رو به پایان است لطفا هرچه سریع‌تر جهت افزایش اقدام نمایید. -تیم پشتیبانی کارو';
                $response = Kavenegar(setting('admin.emergency_calls'), $message);
                break;

            case 0:
                $message = 'وضعیت اضطراری: اعتبار ارسال پیامک شما تمام شده است و از این لحظه به بعد کاربران شما در برناپی امکان دریافت پیامک نخواهند داشت. -تیم پشتیبانی کارو';
                $response = Kavenegar(setting('admin.emergency_calls'), $message);

                break;

            case -10:
                $message =  'وضعیت اضطراری: اعتبار ارسال پیامک شما مدتی است که تمام شده است و تا این لحظه ۱۰ نفر در برناپی موفق به دریافت پیامک نشده ‌اند. -تیم پشتیبانی کارو';
                $response = Kavenegar(setting('admin.emergency_calls'), $message);
                break;
        }

        if($response && $response->entries && $response->entries[0]){
            DB::table('settings')
                ->where('key', 'admin.messaging_credit')
                ->update(['value' =>
                    (int)setting('admin.messaging_credit') - 1
                ]);
        }

    }
}
