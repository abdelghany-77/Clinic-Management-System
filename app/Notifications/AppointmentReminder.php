<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;

class AppointmentReminder extends Notification
{
    protected $appointment;

    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $date = Carbon::parse($this->appointment->appointment_date)->format('l, F j, Y \a\t g:i A');
        return (new MailMessage)
            ->subject('Appointment Reminder')
            ->greeting('Hello ' . $this->appointment->name . '!')
            ->line('This is a reminder for your upcoming appointment on ' . $date)
            ->line('Health Condition: ' . $this->appointment->health_condition)
            ->line('Please arrive 15 minutes early.')
            ->action('View Appointment', url('/'))
            ->line('Thank you for choosing our clinic!');
    }
}
