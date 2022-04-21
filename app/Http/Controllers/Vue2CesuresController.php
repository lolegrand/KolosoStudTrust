<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use Illuminate\Http\Request;

class Vue2CesuresController extends Controller
{
    public function getAll(){
            $Cesures= Vue2Cesures::all();
            return view('vues.Vue2Cesures',['data'=>$Cesures]);
    }
}
