<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My First Vue JS and Laravel</title>
        <!-- Vuetify CSS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/custom/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom/style.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    </head>
    <body>
        <div id="app">
        </div>
        <script src="{{asset('js/custom/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom/jquery.countTo.js')}}"></script>
        <script src="{{asset('js/custom/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/custom/jquery.flexslider-min.js')}}"></script>
        <script src="{{asset('js/custom/jquery.min.js')}}"></script>
        <script src="{{asset('js/custom/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('js/custom/main.js')}}"></script>
        <script src="{{asset('js/custom/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('js/custom/respond.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
