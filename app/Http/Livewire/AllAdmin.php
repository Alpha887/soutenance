<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AllAdmin extends Component
{

    public $admins;

    public function render()
    {

        
        $this->admins = User::all();
        return view('livewire.all-admin', [
            'admins' => $this->admins,
        ]);
    }
}
