<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dev Hub') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/semantic.paper.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/semantic.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}" async=""></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Font Awesome 5 -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <master-layout></master-layout>
    </div>
</body>
<script type="text/javascript">
    $(function () {
       // $('.ui.radio.checkbox').checkbox();
       $('.ui.checkbox').checkbox();
   });
</script>
</html>
