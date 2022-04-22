<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Vue2Cesures;
use Illuminate\Http\Request;



class EtudiantController extends Controller
{
    public function getAll(){
        $data= Etudiant::all();
        return view('vues.vueEtudiants',['etudiants'=>$data]);
    }
    public function getById($id){
        $user = Etudiant::find($id);
        return view('vues.vueEtudiants',['etudiant', $user]);
    }
    public function delete($id){
        $user = Etudiant::find($id);
        if($user)
        $isDeleted = $user->delete();
        return $this->getAll();
    }

    //this function will store data
    //it can create new record based on the data received from the request
    //or it can update data if the we received the id(isset) which is in our case the "num"
    public function store(Request $request)
    {
        $token_req = $request->session()->token();
        $token = csrf_token();

        //checking if the tokens coming from the form is not the same as the one that was originally generated on the server.
        if($token_req!=$token){
            return view('vues.vueEtudiants',['isStored'=>false]);
        }else{



            $user = new Etudiant();
            //generating random unique id
            $user->num = uniqid();

            //checking if we receive num then we are going to update the row otherwise we are going to create a new record etudiant
            if(isset($request->num)){
                $user=Etudiant::find($request->num);

            }

            //validation des champs
//            $validator = $request->validate([
//                 'nom'=>'required',
//                'prenom'=>'required',
//                'dateNaiss'=>'required'
//            ]);

            //checking validation status
//            if ($validator->fails()) {
//                //aborting and redirecting to the 404 page
//                abort(404);
//            }//else continue


            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->dateNaiss = $request->dateNaiss;

            $user->save();

            return $this->getAll();

        }
    }
    //this function is going to display the form filled with the values based on the id, so that we can modify it then submit
    public function modify($id){
        $user=Etudiant::find($id);
        //dd($user);

        return view('vues.ModifyEtudiant',['etudiant'=>$user]);



    }
}
