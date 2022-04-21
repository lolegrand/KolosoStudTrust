<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueEtudiantX;
use Illuminate\Http\Request;

class VueEtudiantXController extends Controller
{
    public function getAll(){
            $data= VueEtudiantX::all();
            return view('vues.VueEtudiantX',['data'=>$data]);
    }
}
