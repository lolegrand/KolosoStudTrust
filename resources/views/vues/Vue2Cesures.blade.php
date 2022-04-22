{{--TODO 9 :
    ---> la vue est l'interface graphique qui sera affiché à l'utilisateur.
    ---> cette interface sera alimenté à travers les données qu'on récupérer de Model(Vue2CesuresController.php)
    ---> les vues utilisent un moteur de templating qui s'appelle Blade
--}}



{{--TODO 10 :
    ---> @extends est une fonction de Blade qui permet d'heriter une template d'une autre vue existante EX : views/layouts/app.blade.php
--}}
@extends('../layouts.app')


{{--TODO 11 :
    ---> @section permet de faire une liaison entre le fichier courant avec l'autre herite(layouts/app)
    ---> Ex: le code entre le @section('content') --- et --- @endSection sera inserer dans le fichier parent  layouts.app dans   la ligne @yield('content')
--}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="m-5">
                        <style>
                            table th{
                                text-transform: capitalize;
                            }
                            table tbody tr{
                                -webkit-transition: 0.3s ;
                                -moz-transition: 0.3s ;
                                -ms-transition: 0.3s ;
                                -o-transition: 0.3s ;
                                transition: 0.3s ;
                            }
                            table tbody tr:hover{
                                background: #4f565e;
                            }



                        </style>

                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <h3>Vue2Cesures</h3>
                                <table class="table table-dark">
                                    <thead>
                                    <tr scope="row">
                                        <th>anne1</th>
                                        <th>anne2</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--TODO 13 :
                                        ---> le $data est un tableau de données qu'on récupérer de Contrôler (Vues2CesureController.php)
                                        ---> return view('vues.Vue2Cesures',['data'=>$Cesures]);
                                        ---> puisque $data est un tableau, on doit utiliser une boucle for qui va parcourir la table  et afficher les attributs de chaque ligne.
                                       --}}
                                    @foreach($data as $single)
                                        <tr class="pointer">
                                            <td>{{$single->anne1}}</td>
                                            <td>{{$single->anne2}}</td>
                                            <td>{{$single->nom}}</td>
                                            <td>{{$single->prenom}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <hr>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
