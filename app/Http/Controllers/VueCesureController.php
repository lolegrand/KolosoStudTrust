<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use Illuminate\Http\Request;

class VueCesureController extends Controller
{
    public function getAll(){
            $data= VueCesure::all();
            return view('vues.VueCesure',['data'=>$data]);
    }
}
