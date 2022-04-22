@extends('./layouts.homeLayout')

@section('header-import')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">

@endsection


@section('content')


    <main id="views">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="Etudiants" class="nav-link">
                                    <div class="card p-3 m-1 active">
                                        <div class="card-body text-center">
                                            <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                                <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#FFFFFF"/>
                                            </svg>

                                            <h5 class="card-title">Etudiants CRUD</h5>
                                            <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueAcquisDetailX" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueAcquisDetailX</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueAcquisX" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueAcquisX</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueAjourneesAgg" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueAjourneesAgg</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueAjourneesDetail" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueAjourneesDetail</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueCesure" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueCesure</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueDiplomes" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueDiplomes</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueECTS" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueECTS</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueEtudiantX" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueEtudiantX</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueImpasseSurX" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueImpasseSurX</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueInscritsModule" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueInscritsModule</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueInscritsUE" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueInscritsUE</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueInscritsUnite" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueInscritsUnite</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueModuleImpaire" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueModuleImpaire</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueModuleNbUE" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueModuleNbUE</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <a href="VueModulePaire" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueModulePaire</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <a href="VueUEImpaire" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueUEImpaire</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-sm-6 col-lg-3">
                    <a href="VueUEImpairePaire" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueUEImpairePaire</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-sm-6 col-lg-3">
                    <a href="VueUEPaire" class="nav-link">
                        <div class="card p-3 m-1">
                            <div class="card-body text-center">
                                <svg class="m-4" xmlns="http://www.w3.org/2000/svg" width="42.756" height="42.752" viewBox="0 0 42.756 42.752">
                                    <path id="paper-plane" d="M36.78.565,2.044,20.6A4.008,4.008,0,0,0,2.52,27.77l9.544,3.95v7.048A4.013,4.013,0,0,0,19.3,41.155l3.657-4.935L32.3,40.078a4.017,4.017,0,0,0,5.494-3.1l4.96-32.332A4.016,4.016,0,0,0,36.78.565Zm-20.708,38.2V33.373l3.056,1.261Zm17.752-2.4-12.842-5.3L32.689,14.176a1.338,1.338,0,0,0-1.979-1.77L13.049,27.8l-9-3.724L38.784,4.031Z" transform="translate(-0.043 -0.025)" fill="#bf3b6c"/>
                                </svg>

                                <h5 class="card-title">VueUEPaire</h5>
                                <!--        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </section>


    </main>


@endsection
