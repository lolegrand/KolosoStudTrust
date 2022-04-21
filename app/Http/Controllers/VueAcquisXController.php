<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use Illuminate\Http\Request;

class VueAcquisXController extends Controller
{
    public function getAll(){
            $data= VueAcquisX::all();
            return view('vues.VueAcquisX',['data'=>$data]);
    }
}
