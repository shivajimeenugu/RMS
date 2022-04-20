<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PushDemo extends Notification implements ShouldQueue
{

    use Queueable;
    private $details;

    //}

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function via($notifiable)
    {

        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        // dd($notifiable);
        return (new WebPushMessage)
            ->title('I\'m Notification Sent BY '.$this->details['Sender'])
            ->icon('/notification-icon.png')
            ->body('Horry!, Push Notifications work!')
            ->action('View App', '/rockstars');
    }

}
