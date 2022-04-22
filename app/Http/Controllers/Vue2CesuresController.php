<?php

namespace App\Http\Controllers;

use App\Models\Vue2Cesures;
use Illuminate\Http\Request;


////TODO 3 :
/// D'abord c'est quoi un controlleur, c'est un element important dans le modele MVC qui contient la logique concernant les actions effectuées par l'utilisateur.
/// d'une autre maniere c'est lui qui fait la liaison entre les routes(web.php) et les Models ainsi que traiter les donnees....

class Vue2CesuresController extends Controller
{
    ////TODO 4 :
    //getAll permet de recuperer tous les tuples Vue2Cesures a travers le model Vue2Cesures.php
    public function getAll(){
        ////TODO 5 :
        //::all(); ---> est une methode de la classe Model
        //ici on doit bien preciser qu'on est en train d'utiliser l'outil Eloquent
        //c'est un mappeur objet-relationnel (ORM) qui permet de lier chaque table de base de données a un "modèle" correspondant qui est utilisé pour interagir avec cette table.
        //il permet de récupérer, d'insérer, de mettre à jour et de supprimer des enregistrements de la table de la bases de donnees.

        ////TODO 6 :
        /// get all vue2cesures
        /// avec Elquent on peut utiliser d'autres fonctions comme where() pour sélectionner avec condition ou bien find(id) pour sélectionner par id ==> getById($id)....etc.
            $Cesures= Vue2Cesures::all();
        ////TODO 7 :
        /// la fonction view() permet de passer les données qu'on récupérer dans la variable $cesures vers la vue  Vue2Cesures(Vue2Cesures.blade.php) qui existe dans le dossier view/vues/Vue2Cesures.blade.php
        return view('vues.Vue2Cesures',['data'=>$Cesures]);
    }
}
