<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Rafael Carvalho | Teste Comerc</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}" />

        <link rel="stylesheet" href="{{asset('css/custom_style.css')}}" />

        <link rel="stylesheet" href="{{asset('css/simple_weather.css')}}" />
    </head>

    <body id="page-top" class="index">

        @include('layouts.partials._header')

        @yield('content')

        @include('layouts.partials._footer')

        @include('layouts.partials._sctipts')

    </body>
</html>