<?php

use Illuminate\Support\Facades\Route;
use \App\Models\ParcoursType;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Vue2Cesures', [Controllers\Vue2CesuresController::class, 'getAll'])->name('Vue2Cesures');
//Route::get('/VueAcquisDetailX', [Controllers\VueAcquisDetailX::class, 'getAll'])->name('VueAcquisDetailX');
//Route::get('/VueAjourneesAgg', [Controllers\VueAjourneesAgg::class, 'getAll'])->name('VueAjourneesAgg');
//Route::get('/VueAjourneesDetail', [Controllers\VueAjourneesDetail::class, 'getAll'])->name('VueAjourneesDetail');
//Route::get('/VueDiplomes', [Controllers\VueDiplomes::class, 'getAll'])->name('VueDiplomes');