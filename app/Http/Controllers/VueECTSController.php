<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueECTS;
use Illuminate\Http\Request;

class VueECTSController extends Controller
{
    public function getAll(){
            $data= VueECTS::all();
            return view('vues.VueECTS',['data'=>$data]);
    }
}
