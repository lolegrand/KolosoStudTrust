<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueInscritsUE;
use App\Models\VueInscritsUnite;
use Illuminate\Http\Request;

class VueInscritsUniteController extends Controller
{
    public function getAll(){
            $data= VueInscritsUnite::all();
            return view('vues.VueInscritsUnite',['data'=>$data]);
    }
}
