<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueModuleNbUE;
use App\Models\VueUEPair;
use Illuminate\Http\Request;

class VueModuleNbUEController extends Controller
{
    public function getAll(){
            $data = VueModuleNbUE::all();
            return view('vues.VueModuleNbUE',['data'=>$data]);
    }
}
