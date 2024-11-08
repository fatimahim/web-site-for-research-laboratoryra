<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Event;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Notifications\AddEvent;
use Illuminate\Support\Facades\DB;

class Calendar extends Component
{
    public $events = [];
    public function render()
    {
        $this->events = json_encode(Event::all());
        return view('livewire.calendar');
    }
    public function eventChange($event)
    {
        $e = Event::find($event['id']);
        $e->start = $event['start'];
        if(Arr::exists($event, 'end')) {
            $e->end = $event['end'];
        }
        $e->save();
    }
    public function eventAdd($event)
{
    $eventModel = Event::create($event);
    $eventData = [
        'id' => $eventModel->id,
        'title' => $eventModel->title,
        'is_activated' => $eventModel->is_activated,
        'start' => $eventModel->start,
        'end' => $eventModel->end,
    ];
    $name = auth()->user()->nom;
    $eventKey = md5(json_encode($eventData));
    $notification = new AddEvent(
        $eventModel->id,
        $name,
        $eventModel->is_activated,
        $eventModel->title,
        $eventModel->start,
        $eventModel->end
    );
    $users = User::where('id', '!=', Auth::id())->get();
    $notifiables = [];
    foreach ($users as $user) {
        if (!DB::table('notifications')->where('notifiable_id', $user->id)->where('data', json_encode($eventKey))->exists()) {
            $notifiables[] = $user;
        }
    }
    if (!empty($notifiables)) {
        Notification::send($notifiables, $notification);
    }

}
public function eventRemove($id)
{
    Event::destroy($id);
}
}