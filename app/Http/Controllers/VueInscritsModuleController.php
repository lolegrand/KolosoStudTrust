<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use App\Models\VueAcquisDetailX;
use App\Models\VueAcquisX;
use App\Models\VueAjourneesAgg;
use App\Models\VueAjourneesDetail;
use App\Models\VueCesure;
use App\Models\VueInscritsModule;
use Illuminate\Http\Request;

class VueInscritsModuleController extends Controller
{
    public function getAll(){
            $data= VueInscritsModule::all();
            return view('vues.VueInscritsModule',['data'=>$data]);
    }
}
