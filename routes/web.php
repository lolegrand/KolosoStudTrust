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

Route::get('/VueAcquisDetailX', [Controllers\VueAcquisDetailXController::class, 'getAll'])->name('VueAcquisDetailX');
Route::get('/VueAcquisX', [Controllers\VueAcquisXController::class, 'getAll'])->name('VueAcquisX');
Route::get('/VueAjourneesAgg', [Controllers\VueAjourneesAggController::class, 'getAll'])->name('VueAjourneesAgg');
Route::get('/VueAjourneesDetail', [Controllers\VueAjourneesDetailController::class, 'getAll'])->name('VueAjourneesDetail');

Route::get('/VueDiplomes', [Controllers\VueDiplomesController::class, 'getAll'])->name('VueDiplomes');
Route::get('/VueECTS', [Controllers\VueECTSController::class, 'getAll'])->name('VueECTS');
Route::get('/VueEtudiantX', [Controllers\VueEtudiantXController::class, 'getAll'])->name('VueEtudiantX');
Route::get('/VueImpasseSurX', [Controllers\VueImpasseSurXController::class, 'getAll'])->name('VueImpasseSurX');
Route::get('/VueInscritsModule', [Controllers\VueInscritsModuleController::class, 'getAll'])->name('VueInscritsModule');
Route::get('/VueInscritsUE', [Controllers\VueInscritsUEController::class, 'getAll'])->name('VueInscritsUE');
Route::get('/VueInscritsUnite', [Controllers\VueInscritsUniteController::class, 'getAll'])->name('VueInscritsUnite');
Route::get('/VueCesure', [Controllers\VueCesureController::class, 'getAll'])->name('VueCesure');

Route::get('/VueUEPaire', [Controllers\VueUEPaireController::class, 'getAll'])->name('VueUEPaire');
Route::get('/VueUEImpaire', [Controllers\VueUEImpaireController::class, 'getAll'])->name('VueUEImpaire');
Route::get('/VueUEImpairePaire', [Controllers\VueUEImpairePaireController::class, 'getAll'])->name('VueUEImpairePaire');

Route::get('/VueModuleImpaire', [Controllers\VueModuleImpaireController::class, 'getAll'])->name('VueUEModuleImpaire');
Route::get('/VueModuleNbUE', [Controllers\VueModuleNbUEController::class, 'getAll'])->name('VueUEModuleNbUE');
Route::get('/VueModulePaire', [Controllers\VueModulePaireController::class, 'getAll'])->name('VueUEModulePaire');

