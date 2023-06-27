<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Invite;


class Allinvite extends Component
{
    public $invite;

    public function render()
    {

        $this->invites = Invite::all();
        return view('livewire.allinvite', [
            'invite' => $this->invite,
        ]);

        return view('livewire.allinvite');
    }
}
