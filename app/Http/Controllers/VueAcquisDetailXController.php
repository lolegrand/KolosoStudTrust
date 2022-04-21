<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use Illuminate\Http\Request;

class VueAcquisDetailXController extends Controller
{
    public function getAll(){
            $data= VueAcquisDetailX::all();
            return view('vues.VueAcquisDetailX',['data'=>$data]);
    }
}
