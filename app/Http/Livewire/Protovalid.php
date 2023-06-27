<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Invite;



class Protovalid extends Component
{
    public $invite;

    public function render()
    {
        $this->invites = Invite::where('valide1','<>','1');
        return view('livewire.protovalid', [
            'invite' => $this->invite,
        ]);
        return view('livewire.protovalid');
    }
}


