<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;

use App\Models\User;

class AddAdmin extends Component
{

    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $cpassword;
    public $statut;
    public $failed;
    public $success;


    protected $rules = [ 
        'nom' => 'required',
        'prenom' => 'required',
        'statut' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'cpassword' => 'required|same:password',
    ];

    protected $messages = [
        'nom.required' => 'Veuillez renseigner le nom.',
        'prenom.required' => 'Veuillez renseigner le prénom.',
        'statut.required' => 'Veuillez sélectionner le statut de l\'administrateur.',
        'email.required' => 'L\'adresse Email est requis.',
        'email.email' => 'Veuillez entrer une adresse électronique valide.',
        'email.unique' => 'Cette adresse Email est déjà utilisée.',
        'password.required' => 'Le mot de passe est requis.',
        'cpassword.required' => 'Veuillez confirmer le mot de passe.',
        'cpassword.same' => 'Les deux champs de mot de passe doivent être conformes.',
        
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function join()
    {
        $validatedData = $this->validate();

        $newUser = new User;
        $newUser->firstname = $validatedData['nom'];
        $newUser->lastname = $validatedData['prenom'];
        $newUser->email = $validatedData['email'];
        $newUser->password = Hash::make($validatedData['password']);
        if ($validatedData['statut'] == "1") {
            $newUser->is_super_admin = True;
        }

        if ($validatedData['statut'] == "2") {
            $newUser->is_guichet_admin = True;
        }

        if ($validatedData['statut'] == "3") {
            $newUser->is_protocole_admin = True;
        }

        if ($validatedData['statut'] == "4") {
            $newUser->is_impression_admin = True;
        }

        if ($validatedData['statut'] == "5") {
            $newUser->is_dg_admin = True;
        }
        
        
        $newUser->save();

        
        $this->success = "Administrateur inséré avec succès.";
    }


    public function render()
    {
        return view('livewire.add-admin');
    }
}
