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
                                <h3>Etudiant CRUD</h3>
                                <table class="table table-dark">
                                    <thead>
                                    <tr scope="row">
                                        <th>num</th>
                                        <th>nom</th>
                                        <th>prenom</th>
                                        <th>dateNaiss</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($etudiants))
                                        @foreach($etudiants as $single)
                                            <tr class="pointer">
                                                <td>{{$single->num}}</td>
                                                <td>{{$single->nom}}</td>
                                                <td>{{$single->prenom}}</td>
                                                <td>{{$single->dateNaiss}}</td>
                                                <td>
                                                    <a href="{{url('/deleteEtudiant/'.$single->num)}}" class="btn btn-danger">delete</a>
                                                    <a href="{{url('/modifyEtudiant/'.$single->num)}}" data-id="{{$single->num}}" class="btn btn-danger modify">modify</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>




                            <div class="col-12">
                                <h3>Ajouter</h3>
                                <form action="{{route('Etudiant.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nom">nom</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">prenom</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateNaiss">dateNaiss</label>
                                        <input type="text"  id="dateNaiss" type='text' value="1994-04-07" name="dateNaiss"  class="datepicker form-control" placeholder="dateNaiss">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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