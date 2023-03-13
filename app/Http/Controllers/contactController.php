<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function getContact()
    {
        $mod = new contactModel();
        $comp = $mod->getComp();
        $mail = $mod->getMail();
        return view('contact', ['comp' => $comp, 'mail' => $mail]);
    }
}
