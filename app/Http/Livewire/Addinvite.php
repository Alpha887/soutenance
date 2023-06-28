<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Hash;

use App\Models\Invite;

class Addinvite extends Component
{

    public $name;
    public $prenom;
    public $email;
    public $photo;
    public $societe;
    public $adress;
    public $failed;
    public $success;


    protected $rules = [ 
        'name' => 'required',
        'prenom' => 'required',
        //'photo' => 'required',
        'email' => 'required|email|unique:invites',
        'societe' => 'required',
        'adress' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Veuillez renseigner le nom.',
        'prenom.required' => 'Veuillez renseigner le prénom.',
        //'photo.required' => 'Veuillez uploader votre photo.',
        'email.required' => 'L\'adresse Email est requis.',
        'email.email' => 'Veuillez entrer une adresse électronique valide.',
        'email.unique' => 'Cette adresse Email est déjà utilisée.',
        //'adress.required' => 'Veillez renseigner votre adresse.',
        
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function join()
    {
        $validatedData = $this->validate();

        $newInvite = new Invite;
        $newInvite->name = $validatedData['name'];
        $newInvite->prenoms= $validatedData['prenom'];
        $newInvite->email = $validatedData['email'];
        $newInvite->photo = $validatedData['photo'];
        $newInvite->societe = $validatedData['societe'];
        $newInvite->adress = $validatedData['adress'];
        
       
        
        
        $newInvite->save();

        
        $this->success = "Invité inséré avec succès.";
    }

    public function render()
    {
        return view('livewire.addinvite');
    }
}
