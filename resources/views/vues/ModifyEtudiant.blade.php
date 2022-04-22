@extends('../layouts.app')

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


                            <div class="col-12">
                                <h3 id="modify">Modifier</h3>
                                @if(isset($etudiant))
                                <h5>id : <span id="id_etudiant"></span></h5>
                                <form action="{{route('Etudiant.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" class="form-control" name="num" value="{{$etudiant->num}}">
                                    <div class="form-group">
                                        <label for="nom">nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom"  value="{{$etudiant->nom}}" placeholder="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">prenom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" value="{{$etudiant->prenom}}" placeholder="prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateNaiss">dateNaiss</label>
                                        <input type="text"  id="dateNaiss" type='text' value="1994-04-07" name="dateNaiss" value="{{$etudiant->dateNaiss}}"  class="datepicker form-control" placeholder="dateNaiss">
                                    </div>

                                    <button type="submit" class="btn btn-primary">modifier</button>
                                </form>
                                    @endif
                            </div>


                        </div>



                        <hr>

                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

@section('javascript-code')


@endsection