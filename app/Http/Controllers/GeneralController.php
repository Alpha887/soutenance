<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;

use App\Models\Pack;

class GeneralController extends Controller
{
    public function welcome() {

        $packs = Pack::all();

        return view('generals.welcome', [
            'packs' => $packs,
        ]);
    }
}
