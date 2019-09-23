<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CreatedMember extends Notification
{
    use Queueable;

    protected $member;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($member)
    {
        $this->member = $member;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->subject('новая заявка')
                    ->greeting('Здравствуйте '.$notifiable->name.'!')
                    ->salutation('Ваш '.config('app.name'))
                    ->line('У вас новая заявка.')
                    ->line('Мероприятие: '.$this->member->feast->title.'.')
                    ->line('Новый участник: '.$this->member->first_name.' '.$this->member->last_name.'.')
                    ->line('Уровень просветления - '.$this->member->education_level->title.'.')
                    ->line('Телефон - '.$this->member->phone.'.')
                    ->line('Email - '.$this->member->email.'.')
                    ->line('Приятно работать с Вами,');
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
}
