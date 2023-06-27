<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{


    public $email;
    public $password;
    public $failed;
    public $success;

    //public $admins = DB::table('admins')->select('username')->get();

    protected $rules = [ 
        'email' => 'required',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Ce champ est requis',
        'password.required' => 'Ce champ est requis',
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function login(Request $request)
    {
        $validatedData = $this->validate();
 
        if ( Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'] ]) ) {

            if ( Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'is_verified' => 1, 'is_active' => 1, ]) ) {

                $request->session()->regenerate();
                return redirect()->route('user_dashboard');
                //$this->success = "Connected. Good";

            }
            else {

                if ( Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'is_verified' => 0, 'is_active' => 0]) ) {

                    $this->failed = "Compte non vérifié et inactif. Veuillez vérifier votre E-mail pour vérification";
                }

                elseif ( Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'is_verified' => 0]) ) {

                    $this->failed = "Compte non vérifié. Veuillez vérifier votre E-mail pour vérification";
                }

                elseif ( Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['password'], 'is_active' => 0]) ) {

                    $this->failed = "Compte inactif. Contactez le support clientèle pour vérification. Merci !!!";
                }
            }
                
        }

        else {

            $this->failed = "Identifiants incorrects. Veuillez vérifier vos informations de connexion. Merci!!";

        }
    }


    public function render()
    {
        return view('livewire.login');
    }
}
