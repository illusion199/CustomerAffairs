<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>





    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <link rel="stylesheet" href="/css/custom/iview.css"> --}}
    <link rel="stylesheet" type="text/css" href="http://unpkg.com/iview/dist/styles/iview.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/custom/meanmenu.min.css">
    {{--
    <link rel="stylesheet" href="/css/custom/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="/css/custom/icofont.css">

    <link rel="stylesheet" href="/css/custom/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/custom/default.css">
    <link rel="stylesheet" href="/css/custom/jquery-ui.css">
    <link rel="stylesheet" href="/css/custom/style.css">
    <link rel="stylesheet" href="/css/custom/media.css">

    <script type="text/javascript" src="http://vuejs.org/js/vue.min.js"></script>
    <script type="text/javascript" src="http://unpkg.com/iview/dist/iview.min.js"></script>

</head>

<body>
