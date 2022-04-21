<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueModuleImpair;
use App\Models\VueModuleImpaire;
use App\Models\VueUEPair;
use Illuminate\Http\Request;

class VueModuleImpaireController extends Controller
{
    public function getAll(){
            $data = VueModuleImpaire::all();
            return view('vues.VueModuleImpaire',['data'=>$data]);
    }
}
