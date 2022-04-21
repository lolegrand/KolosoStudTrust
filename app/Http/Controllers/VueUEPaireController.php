<?php

namespace App\Http\Controllers;

use App\Models\VueUEPair;
use App\Models\VueUEPaire;

class VueUEPaireController extends Controller
{
    public function getAll(){
            $data = VueUEPaire::all();
            return view('vues.VueUEPaire',['data'=>$data]);
    }
}
