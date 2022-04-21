<?php

namespace App\Http\Controllers;

use App\Models\VueUEImpairePaire;
use App\Models\VueUEImpairPair;
use App\Models\VueUEPair;

class VueUEImpairePaireController extends Controller
{
    public function getAll(){
            $data = VueUEImpairePaire::all();
            return view('vues.VueUEImpairePaire',['data'=>$data]);
    }
}
