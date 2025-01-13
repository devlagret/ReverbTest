<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class NotificationBells extends Component
{
    public $notifications = [];
    public function render()
    {
        return view('livewire.notification-bells');
    }

    #[On('echo:test,SendNotif')]
    public function addNotif($event) {
        $this->notifications = collect($this->notifications)->push($event);
    }
}
