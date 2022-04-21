<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueModulePair;
use App\Models\VueModulePaire;
use App\Models\VueUEPair;
use Illuminate\Http\Request;

class VueModulePaireController extends Controller
{
    public function getAll(){
            $data = VueModulePaire::all();
            return view('vues.VueModulePaire',['data'=>$data]);
    }
}
