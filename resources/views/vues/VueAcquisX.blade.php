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
                            <div class="col-6">
                                <h3>VueAquisX</h3>
                                <table class="table table-dark">
                                    <thead>
                                    <tr scope="row">
                                        <th>codeUE</th>
                                        <th>etat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $single)
                                        <tr class="pointer">
                                            <td>{{$single->codeUE}}</td>
                                            <td>{{$single->etat}}</td>
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
