<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

@yield('header-import')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <main class="py-4">
            {{--TODO 12 :
            @yield('content') permet de declarer un block qui sera remplacer par le code de preciser entre @section('content') --- et --- @endSection  dans les autre vues qui vont heriter cette vue
--}}
            @yield('content')
        </main>
    </div>

    @yield('javascript-link')
<div class="w-100 text-center">
    <a href="/#views" class="btn btn-primary my-auto">return to homepage</a>
</div>
</body>
</html>
