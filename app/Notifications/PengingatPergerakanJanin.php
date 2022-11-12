<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Fcm\FcmChannel;
use NotificationChannels\Fcm\FcmMessage;
use NotificationChannels\Fcm\Resources\WebpushConfig;
use NotificationChannels\Fcm\Resources\WebpushFcmOptions;

class PengingatPergerakanJanin extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail',FcmChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Pengingat Pemeriksaan Pergerakan Janin')
                    ->line('Sudah waktunya periksa pergerakan janin.')
                    ->line('Terimakasih telah menggunakan aplikasi ini');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toFcm($notifiable)
    {
        return FcmMessage::create()
            ->setData(['data1' => 'value', 'data2' => 'value2'])
            ->setNotification(\NotificationChannels\Fcm\Resources\Notification::create()
                ->setTitle('Pengingat Pemeriksaan Pergerakan Janin')
                ->setBody('Sudah waktunya periksa pergerakan janin anda')
                ->setImage('https://cdn.pixabay.com/photo/2016/05/24/16/48/mountains-1412683_960_720.png'))
           /* ->setAndroid(
                AndroidConfig::create()
                    ->setFcmOptions(AndroidFcmOptions::create()->setAnalyticsLabel('analytics'))
                    ->setNotification(AndroidNotification::create()->setColor('#0A0A0A'))
            )->setApns(
                ApnsConfig::create()
                    ->setFcmOptions(ApnsFcmOptions::create()->setAnalyticsLabel('analytics_ios')));
            */
            ->setWebpush(
                WebpushConfig::create()
                ->setFcmOptions(WebpushFcmOptions::create()->setAnalyticsLabel('analytics_web'))
            ) ;
    }
     // optional method when using kreait/laravel-firebase:^3.0, this method can be omitted, defaults to the default project
     public function fcmProject($notifiable, $message)
     {
         // $message is what is returned by `toFcm`
         return 'app'; // name of the firebase project to use
     }
}
