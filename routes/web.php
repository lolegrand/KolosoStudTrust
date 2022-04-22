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

//TODO 1 : Comment
//le route(web.php) permet de traiter les requetes HTTP (Ex : studTrust.com/Vue2Cesures/getAll) ==> le route en generale est utilisé pour créer un itinéraire unique.
//==> Cela va permettre au route de détecter et rediriger la requête vers un Controller précis, ce dernier va contacter la bases de données à travers un Model ou plusieurs Models(ça dépend de la requête demandée).

// la ligne suivante permet de détecter le chemin racine / ( Ex : localhost:8080/ ) puis afficher la vue/view welcome(welcome.blade.php) qui existe dans le dossier view.
// dans cette route on fait appel a la methode static "get" de la classe Route
// qui va nous permettre de recuperer les donnees passé en url avec la méthode GET (Ex : localhost:8080/?name=tata&prenom=toto);
// dans notre cas il n y a pas de paramètres passés par le lien.
Route::get('/', function () {
    //return la vue, le contenu de fichier welcome.blade.php qui existe dans le dossier view.
    return view('welcome');
});
//TODO 2 : Comment
//pareil que le dernier, en revanche au lieu de retourner directement la vue, on fait appel à un controller(Vue2CesuresController) qui va traiter la requête et contacter un  model (pas forcément).
//puis concernant ->name('Vue2Cesures') permet d'attribuer un nom(alias) a une route qui sera utilise lorsqu'on génére des URL ou des redirections via les fonctions d'aide route et redirect de Laravel
//Ex : $url = route('Vue2Cesures');
//return redirect()->route('Vue2Cesures');
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

