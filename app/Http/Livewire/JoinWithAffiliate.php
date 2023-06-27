<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;

use App\Models\User;
use App\Models\Affiliate;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Mail;
use App\Mail\Inscription as JoinMail;

class JoinWithAffiliate extends Component
{

    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $confirmPassword;
    public $remember;
    public $failed;
    public $success;
    public $user;
    

    public function mount($user)
    {
        $this->user = $user;
        
    }

    //public $admins = DB::table('admins')->select('username')->get();

    protected $rules = [ 
        'nom' => 'required|min:3|max:15',
        'prenom' => 'required|min:3|max:15',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:15',
        'confirmPassword' => 'required|min:6|max:15|same:password',
        'remember' => 'required',
    ];

    protected $messages = [
        'nom.required' => 'Veuillez renseigner votre nom.',
        'nom.min' => 'Au moins trois caractères requis pour le nom.',
        'nom.max' => 'Au maximum quinze caractères requis pour le nom.',
        'prenom.required' => 'Veuillez renseigner votre prénom.',
        'prenom.min' => 'Au moins trois caractères requis pour le prénom.',
        'prenom.max' => 'Au maximum quinze caractères requis pour le prénom.',
        'email.required' => 'Votre adresse Email est requis.',
        'email.email' => 'Veuillez entrer une adresse électronique valide.',
        'email.unique' => 'Cette adresse Email est déjà utilisée.',
        'password.required' => 'Le mot de passe est requis.',
        'password.min' => 'Le mot de passe doit être au minimum de 6 caractères.',
        'password.max' => 'Le mot de passe doit être au maximum de 15 caractères.',
        'confirmPassword.required' => 'Veuillez confirmer votre mot de passe.',
        'confirmPassword.min' => 'Le mot de passe doit être au minimum de 6 caractères.',
        'confirmPassword.max' => 'Le mot de passe doit être au maximum de 15 caractères.',
        'confirmPassword.same' => 'Les deux champs de mot de passe doivent être conformes.',
        'remember.required' => 'Vous devez accepter les conditions d\'utilisations des données.'
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function join()
    {
        $validatedData = $this->validate();

        $code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOP&QRSTUVWXYZazertyuiopqsdfghjklmnbvcxw'),1,8);

        while (User::where('codeConfirmation', $code)->exists()) {
            $code = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOP&QRSTUVWXYZazertyuiopqsdfghjklmnbvcxw'),1,8);
        }


        $TenDigit = mt_rand(1000000000,9999999999);

        while (User::where('affiliateLink', str($TenDigit))->exists()) {
            $TenDigit = mt_rand(1000000000,9999999999);
        }

        $newUser = new User;
        $newUser->firstname = $validatedData['nom'];
        $newUser->lastname = $validatedData['prenom'];
        $newUser->email = $validatedData['email'];
        $newUser->password = Hash::make($validatedData['password']);
        $newUser->terms_accepted = $validatedData['remember'];
        $newUser->molo = $validatedData['password'];
        $newUser->affiliateLink = $TenDigit;
        $newUser->codeConfirmation = $code;
        $newUser->save();

        Mail::mailer('join')->to($validatedData['email'])->queue(new JoinMail($newUser));

        $user = User::find($this->user->id);

        $oldAffiliateNumber = $user->affiliateNumber;
        $oldDirectAffiliateNumber = $user->directAffiliateNumber;
        $oldIndirectAffiliateNumber = $user->indirectAffiliateNumber;

        $user->update([
            'affiliateNumber' => $oldAffiliateNumber + 1,
            'directAffiliateNumber' => $oldDirectAffiliateNumber + 1,
        ]);

        $newSponsor = new Sponsor;
        $newSponsor->fullname = $user->lastname." ".$user->firstname;
        $newSponsor->email = $user->email;
        $newSponsor->level = 1;
        $newSponsor->user_id = $newUser->id;
        $newSponsor->save();


        $newAffiliate = new Affiliate;
        $newAffiliate->fullname = $newUser->lastname." ".$newUser->firstname;
        $newAffiliate->email = $newUser->email;
        $newAffiliate->level = 1;
        $newAffiliate->user_id = $user->id;
        //$newAffiliate->sponsor_id = $newSponsor->id;
        $newAffiliate->save();


        $sponsors = Sponsor::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        if ($sponsors){

            $i = 1;
            foreach($sponsors as $sponsor){

                $i = $i+1;
                $newSponsor = new Sponsor;
                $newSponsor->fullname = $sponsor->fullname;
                $newSponsor->email = $sponsor->email;
                $newSponsor->level = $i;
                $newSponsor->user_id = $newUser->id;
                $newSponsor->save();


                $sponsorUser = User::where('email', $sponsor->email)->first();

                $oldAffiliateNumber1 = $sponsorUser->affiliateNumber;
                $oldDirectAffiliateNumber1 = $sponsorUser->directAffiliateNumber;
                $oldIndirectAffiliateNumber1 = $sponsorUser->indirectAffiliateNumber;

                $sponsorUser->update([
                    'affiliateNumber' => $oldAffiliateNumber1 + 1,
                ]);

                $sponsorUser->indirectAffiliateNumber = $oldIndirectAffiliateNumber1 + 1;
                $sponsorUser->save();

                $newAffiliate = new Affiliate;
                $newAffiliate->fullname = $newUser->lastname." ".$newUser->firstname;
                $newAffiliate->email = $newUser->email;
                $newAffiliate->level = 2;
                $newAffiliate->user_id = $sponsorUser->id;
                //$newAffiliate->sponsor_id = $newSponsor->id;
                $newAffiliate->save();
            }
        }



        $this->success = "Félicitations, vous vous êtes bien inscrits. Veuillez vérifier votre E-mail pour commencer une très belle aventure.";
    }


    public function render()
    {
        return view('livewire.join-with-affiliate', [
            'user' => $this->user,
        ]);
    }
}
