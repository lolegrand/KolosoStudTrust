<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueUEImpair;
use App\Models\VueUEImpaire;
use App\Models\VueUEPair;
use Illuminate\Http\Request;

class VueUEImpaireController extends Controller
{
    public function getAll(){
            $data = VueUEImpaire::all();
            return view('vues.VueUEImpaire',['data'=>$data]);
    }
}
