<?php

namespace App\Notifications; 

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AddEvent extends Notification
{
    use Queueable;
    private $eventid;
    private $name;
    private $is_activated;
    private $title;
    private $start;
    private $end;
    
    /**
     * Create a new notification instance.
     */
    public function __construct($id,$nom,$is_activated,$title,$start,$end)
    {
        //
        
        $this->eventid=$id;
        $this->name=$nom;
        $this->is_activated=$is_activated;
        $this->title=$title;
        $this->end=$end;
        $this->start=$start;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    } 

    public function toArray(object $notifiable): array
    {
        return [
            //
            'eventid'=>$this->eventid,
            'name'=>$this->name,
            'is_activated'=>$this->is_activated,
            'title'=>$this->title,
            'start'=>$this->start,
            'end'=>$this->end

        ];
    }
}
