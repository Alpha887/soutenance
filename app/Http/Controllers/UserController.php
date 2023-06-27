<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function loginView() {

        if ( Auth::check() and Auth()->user()->is_verified and Auth()->user()->is_active ) {

            return redirect()->route('user_dashboard');
        }

        else{

            return view('users.login');

        }

    }



    public function joinView() {

        return view('users.join');
    }


    public function emailVerification() {

        return view('users.emailVerification');
    }



    public function dashboard() {

        if ( Auth::check() and Auth()->user()->is_verified and Auth()->user()->is_active ) {

            return view('users.dashboard', [
                //'ag_locations' => $ag_locations,
            ]);
        }

        else {

            return redirect()->route('login')->withPermission('Vous n\'êtes pas autorisé à accéder à cette page. Veuillez vous connecter d\'abord!!!');

        }
    }


    public function logout(Request $request) {
    
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->withDeconnexion('Vous vous êtes déconnecté avec succès. Nous serons heureux de vous revoir bientôt. Merci.');
    }



    public function joinWithAffiliateLink($id) {

        if ( Auth::check() and Auth()->user()->is_verified and Auth()->user()->is_active ) {

            return redirect()->route('user_dashboard');
        }

        else {

            $user = User::where('affiliateLink', str($id) )
            ->where('is_active', True)
            ->where('is_verified', True)
            ->first();

            if($user){
                return view('users.joinWithAffiliateLink', [
                    'user' => $user,
                ]);
            }

            /*else{

            }*/

            

        }
    }


    public function viewAffiliate() {

        if ( Auth::check() and Auth()->user()->is_verified and Auth()->user()->is_active ) {

            return view('users.my-affiliates', [
                //'ag_locations' => $ag_locations,
            ]);
        }

        else {

            return redirect()->route('login')->withPermission('Vous n\'êtes pas autorisé à accéder à cette page. Veuillez vous connecter d\'abord!!!');

        }
    }
}
