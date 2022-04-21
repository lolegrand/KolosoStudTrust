<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueInscritsUE;
use Illuminate\Http\Request;

class VueInscritsUEController extends Controller
{
    public function getAll(){
            $data= VueInscritsUE::all();
            return view('vues.VueInscritsUE',['data'=>$data]);
    }
}
