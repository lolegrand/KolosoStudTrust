<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use Illuminate\Http\Request;

class VueAjourneesAggController extends Controller
{
    public function getAll(){
            $data= VueAjourneesAgg::all();
            return view('vues.VueAjourneesAgg',['data'=>$data]);
    }
}
