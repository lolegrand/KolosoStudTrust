<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueDiplomes;
use Illuminate\Http\Request;

class VueDiplomesController extends Controller
{
    public function getAll(){
            $data= VueDiplomes::all();
            return view('vues.VueDiplomes',['data'=>$data]);
    }
}
