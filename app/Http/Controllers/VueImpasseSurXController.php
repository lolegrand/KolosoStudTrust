<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueImpasseSurX;
use Illuminate\Http\Request;

class VueImpasseSurXController extends Controller
{
    public function getAll(){
            $data= VueImpasseSurX::all();
            return view('vues.VueImpasseSurX',['data'=>$data]);
    }
}
