<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StudTrust') }}</title>

    <link rel="canonical" href="">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Custom styles for the cover -->
    <link href="cover.css" rel="stylesheet">



    <!-- Custom styles -->
    <link href="style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@yield('header-import')

</head>
<body>

<div class="d-flex height-100 w-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-image" style="background-image: url(img/bg.png)">
        <header class="mb-auto mb-auto ">
            <div class="px-5 d-flex justify-content-between align-items-center">
                <h3 class=" mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="99.706" viewBox="0 0 122 99.706">
                        <defs>
                            <clipPath id="clip-path">
                                <rect id="Rectangle_125" data-name="Rectangle 125" width="122" height="99.706" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="Group_55" data-name="Group 55" clip-path="url(#clip-path)">
                            <path id="Path_35" data-name="Path 35" d="M122,4.131c0,4.656-9.059,8.806-23.176,11.491A208.789,208.789,0,0,1,61,18.776a208.786,208.786,0,0,1-37.824-3.154C9.059,12.937,0,8.788,0,4.131,0,2.7.859,1.307,2.46,0,6.059,2.941,13.4,5.5,23.176,7.359A208.786,208.786,0,0,0,61,10.514,208.789,208.789,0,0,0,98.824,7.359C108.6,5.5,115.941,2.941,119.54,0c1.6,1.307,2.46,2.7,2.46,4.131" transform="translate(0)" fill="#bf3b6c"/>
                            <path id="Path_36" data-name="Path 36" d="M152.577,53.363V51.13H142.134v.5c-.005,6.258-.192,79.119-5.666,79.119h21.771c-5.117,0-5.614-65.017-5.661-77.384" transform="translate(-86.353 -32.354)" fill="#bf3b6c"/>
                            <path id="Path_37" data-name="Path 37" d="M142.627,101.775Q138.9,96.5,127.887,91.691l-.738-.312c.11,3.683.242,7.407.4,11.065a29.567,29.567,0,0,1,4.917,3.21,10.156,10.156,0,0,1,3.724,8.072,12.306,12.306,0,0,1-4.308,9.776,14.727,14.727,0,0,1-2.784,1.9,16.573,16.573,0,0,1-7.884,1.821,30.217,30.217,0,0,1-7.69-.878,17.144,17.144,0,0,1-4.025-1.568q-4.423-2.446-4.421-8.648v-.466h-9.7v.466a18.468,18.468,0,0,0,2.908,10.044,15.96,15.96,0,0,0,8.534,6.6,32.072,32.072,0,0,0,5.4,1.344,53.388,53.388,0,0,0,8.6.635,39.293,39.293,0,0,0,9.577-1.039,21.678,21.678,0,0,0,4.583-1.678,19.614,19.614,0,0,0,8.3-7.991,21.905,21.905,0,0,0,2.986-10.936,19.553,19.553,0,0,0-3.647-11.329M105.387,91.42A44.378,44.378,0,0,0,115.394,97.1c.129-3.676.239-7.37.327-10.962v0q-1.239-.656-2.108-1.2a13.363,13.363,0,0,1-4.5-4.5,11.139,11.139,0,0,1-1.627-5.817,11.525,11.525,0,0,1,3.452-8.185,10.991,10.991,0,0,1,5.152-2.938,20.725,20.725,0,0,1,5.516-.668,25.423,25.423,0,0,1,5.024.474c.481.1.951.209,1.414.338a8.483,8.483,0,0,1,4.425,2.6,5.708,5.708,0,0,1,1.473,3.647v.466h9.7v-.466a13.36,13.36,0,0,0-4.77-10.165Q135,56.21,126.58,55.538q-1.978-.16-4.2-.158a45.462,45.462,0,0,0-6.247.4Q108,56.909,103.565,61.2a20.3,20.3,0,0,0-4.073,23.08,21.678,21.678,0,0,0,5.894,7.139" transform="translate(-60.354 -35.043)" fill="#fff"/>
                            <path id="Path_38" data-name="Path 38" d="M142.627,101.775Q138.9,96.5,127.887,91.691l-.738-.312c.11,3.683.242,7.407.4,11.065a29.567,29.567,0,0,1,4.917,3.21,10.156,10.156,0,0,1,3.724,8.072,12.306,12.306,0,0,1-4.308,9.776,14.727,14.727,0,0,1-2.784,1.9,16.573,16.573,0,0,1-7.884,1.821,30.217,30.217,0,0,1-7.69-.878,17.144,17.144,0,0,1-4.025-1.568q-4.423-2.446-4.421-8.648v-.466h-9.7v.466a18.468,18.468,0,0,0,2.908,10.044,15.96,15.96,0,0,0,8.534,6.6,32.072,32.072,0,0,0,5.4,1.344,53.388,53.388,0,0,0,8.6.635,39.293,39.293,0,0,0,9.577-1.039,21.678,21.678,0,0,0,4.583-1.678,19.614,19.614,0,0,0,8.3-7.991,21.905,21.905,0,0,0,2.986-10.936,19.553,19.553,0,0,0-3.647-11.329M105.387,91.42A44.378,44.378,0,0,0,115.394,97.1c.129-3.676.239-7.37.327-10.962v0q-1.239-.656-2.108-1.2a13.363,13.363,0,0,1-4.5-4.5,11.139,11.139,0,0,1-1.627-5.817,11.525,11.525,0,0,1,3.452-8.185,10.991,10.991,0,0,1,5.152-2.938,20.725,20.725,0,0,1,5.516-.668,25.423,25.423,0,0,1,5.024.474c.481.1.951.209,1.414.338a8.483,8.483,0,0,1,4.425,2.6,5.708,5.708,0,0,1,1.473,3.647v.466h9.7v-.466a13.36,13.36,0,0,0-4.77-10.165Q135,56.21,126.58,55.538q-1.978-.16-4.2-.158a45.462,45.462,0,0,0-6.247.4Q108,56.909,103.565,61.2a20.3,20.3,0,0,0-4.073,23.08,21.678,21.678,0,0,0,5.894,7.139" transform="translate(-60.354 -35.043)" fill="#fff" stroke="#000" stroke-width="1"/>
                        </g>
                    </svg>

                </h3>

                <nav class="nav justify-content-center menu h-100 d-none d-md-block">
                    <a class="nav-link d-inline active" aria-current="page" href="#">Home</a>
                    <a class="nav-link d-inline" href="#">Features</a>
                    <a class="nav-link d-inline" href="#">Contact</a>
                </nav>

                <div class="nav nav-masthead justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="20" viewBox="0 0 31 20">
                        <g id="Group_101" data-name="Group 101" transform="translate(-1749 -45)">
                            <rect id="Rectangle_88" data-name="Rectangle 88" width="31" height="5" rx="2.5" transform="translate(1749 45)"/>
                            <rect id="Rectangle_89" data-name="Rectangle 89" width="31" height="4" rx="2" transform="translate(1749 53)" fill="#bf3b6c"/>
                            <rect id="Rectangle_90" data-name="Rectangle 90" width="31" height="5" rx="2.5" transform="translate(1749 60)"/>
                        </g>
                    </svg>

                </div>
            </div>
        </header>

        <div class="px-3 text-start mt-auto container mb-5">
            <h1>Your safety is at the heart <br>of our concern</h1>
            <!--    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>-->
        </div>


    </div>
</div>

        @yield('content')



        <footer >
            <div class=" container pt-4 my-md-5 pt-md-5">
                <div class="row">
                    <div class="col-3 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="190" viewBox="0 0 122 99.706">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_125" data-name="Rectangle 125" width="122" height="99.706" fill="none"/>
                                </clipPath>
                            </defs>
                            <g id="Group_55" data-name="Group 55" clip-path="url(#clip-path)">
                                <path id="Path_35" data-name="Path 35" d="M122,4.131c0,4.656-9.059,8.806-23.176,11.491A208.789,208.789,0,0,1,61,18.776a208.786,208.786,0,0,1-37.824-3.154C9.059,12.937,0,8.788,0,4.131,0,2.7.859,1.307,2.46,0,6.059,2.941,13.4,5.5,23.176,7.359A208.786,208.786,0,0,0,61,10.514,208.789,208.789,0,0,0,98.824,7.359C108.6,5.5,115.941,2.941,119.54,0c1.6,1.307,2.46,2.7,2.46,4.131" transform="translate(0)" fill="#bf3b6c"/>
                                <path id="Path_36" data-name="Path 36" d="M152.577,53.363V51.13H142.134v.5c-.005,6.258-.192,79.119-5.666,79.119h21.771c-5.117,0-5.614-65.017-5.661-77.384" transform="translate(-86.353 -32.354)" fill="#bf3b6c"/>
                                <path id="Path_37" data-name="Path 37" d="M142.627,101.775Q138.9,96.5,127.887,91.691l-.738-.312c.11,3.683.242,7.407.4,11.065a29.567,29.567,0,0,1,4.917,3.21,10.156,10.156,0,0,1,3.724,8.072,12.306,12.306,0,0,1-4.308,9.776,14.727,14.727,0,0,1-2.784,1.9,16.573,16.573,0,0,1-7.884,1.821,30.217,30.217,0,0,1-7.69-.878,17.144,17.144,0,0,1-4.025-1.568q-4.423-2.446-4.421-8.648v-.466h-9.7v.466a18.468,18.468,0,0,0,2.908,10.044,15.96,15.96,0,0,0,8.534,6.6,32.072,32.072,0,0,0,5.4,1.344,53.388,53.388,0,0,0,8.6.635,39.293,39.293,0,0,0,9.577-1.039,21.678,21.678,0,0,0,4.583-1.678,19.614,19.614,0,0,0,8.3-7.991,21.905,21.905,0,0,0,2.986-10.936,19.553,19.553,0,0,0-3.647-11.329M105.387,91.42A44.378,44.378,0,0,0,115.394,97.1c.129-3.676.239-7.37.327-10.962v0q-1.239-.656-2.108-1.2a13.363,13.363,0,0,1-4.5-4.5,11.139,11.139,0,0,1-1.627-5.817,11.525,11.525,0,0,1,3.452-8.185,10.991,10.991,0,0,1,5.152-2.938,20.725,20.725,0,0,1,5.516-.668,25.423,25.423,0,0,1,5.024.474c.481.1.951.209,1.414.338a8.483,8.483,0,0,1,4.425,2.6,5.708,5.708,0,0,1,1.473,3.647v.466h9.7v-.466a13.36,13.36,0,0,0-4.77-10.165Q135,56.21,126.58,55.538q-1.978-.16-4.2-.158a45.462,45.462,0,0,0-6.247.4Q108,56.909,103.565,61.2a20.3,20.3,0,0,0-4.073,23.08,21.678,21.678,0,0,0,5.894,7.139" transform="translate(-60.354 -35.043)" fill="#fff"/>
                                <path id="Path_38" data-name="Path 38" d="M142.627,101.775Q138.9,96.5,127.887,91.691l-.738-.312c.11,3.683.242,7.407.4,11.065a29.567,29.567,0,0,1,4.917,3.21,10.156,10.156,0,0,1,3.724,8.072,12.306,12.306,0,0,1-4.308,9.776,14.727,14.727,0,0,1-2.784,1.9,16.573,16.573,0,0,1-7.884,1.821,30.217,30.217,0,0,1-7.69-.878,17.144,17.144,0,0,1-4.025-1.568q-4.423-2.446-4.421-8.648v-.466h-9.7v.466a18.468,18.468,0,0,0,2.908,10.044,15.96,15.96,0,0,0,8.534,6.6,32.072,32.072,0,0,0,5.4,1.344,53.388,53.388,0,0,0,8.6.635,39.293,39.293,0,0,0,9.577-1.039,21.678,21.678,0,0,0,4.583-1.678,19.614,19.614,0,0,0,8.3-7.991,21.905,21.905,0,0,0,2.986-10.936,19.553,19.553,0,0,0-3.647-11.329M105.387,91.42A44.378,44.378,0,0,0,115.394,97.1c.129-3.676.239-7.37.327-10.962v0q-1.239-.656-2.108-1.2a13.363,13.363,0,0,1-4.5-4.5,11.139,11.139,0,0,1-1.627-5.817,11.525,11.525,0,0,1,3.452-8.185,10.991,10.991,0,0,1,5.152-2.938,20.725,20.725,0,0,1,5.516-.668,25.423,25.423,0,0,1,5.024.474c.481.1.951.209,1.414.338a8.483,8.483,0,0,1,4.425,2.6,5.708,5.708,0,0,1,1.473,3.647v.466h9.7v-.466a13.36,13.36,0,0,0-4.77-10.165Q135,56.21,126.58,55.538q-1.978-.16-4.2-.158a45.462,45.462,0,0,0-6.247.4Q108,56.909,103.565,61.2a20.3,20.3,0,0,0-4.073,23.08,21.678,21.678,0,0,0,5.894,7.139" transform="translate(-60.354 -35.043)" fill="#fff" stroke="#000" stroke-width="1"/>
                            </g>
                        </svg>

                    </div>
                    <div class="col-12 col-md-2 mb-2">
                        <h5>Main Menu</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Home</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Features</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">About</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Test</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 mb-2">
                        <h5>Xxxxxxxx</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Xxxxxxxx</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Xxxxxxxx</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2 mb-2">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


@yield('javascript-link')

</body>
</html>