<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Test extends Notification implements ShouldQueue
{

    use Queueable;

    //}

    public function via($notifiable)
    {

        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title('I\'m Notification FROM RMS'.$notifiable->data)
            ->icon('/notification-icon.png')
            ->body('Horry!, Push Notifications work!')
            ->action('View App', '/rockstars');
    }

}
