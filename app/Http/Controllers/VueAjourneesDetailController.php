<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use Illuminate\Http\Request;

class VueAjourneesDetailController extends Controller
{
    public function getAll(){
            $data= VueAjourneesDetail::all();
            return view('vues.VueAjourneesDetail',['data'=>$data]);
    }
}
