<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EmailVerification extends Component
{

    public $code;
    public $failed;
    public $success;

    //public $admins = DB::table('admins')->select('username')->get();

    protected $rules = [ 
        'code' => 'required',
    ];

    protected $messages = [
        'code.required' => 'Veuillez renseigner le code envoyé.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function verify()
    {
        $validatedData = $this->validate();

        $user = User::where('codeConfirmation', $validatedData['code'])
                    ->where('codeUsed', False)->first();

        if ( $user and $validatedData['code'] == $user->codeConfirmation ) {

            if ($user){
                $user->update([
                    'is_verified' => True,
                    'is_active' => True,
                ]);

                $user->codeUsed = True;
                $user->save();
            }

            $this->success = "Félicitations, votre compte a été vérifié avec succès. Nous vous souhaitons une très belle aventure.";
        }

        else{

            $this->failed = "Code de confirmation incorrect. Vérifiez correctement votre E-mail. Merci!!!";

        }

        
    }



    public function render()
    {
        return view('livewire.email-verification');
    }
}
