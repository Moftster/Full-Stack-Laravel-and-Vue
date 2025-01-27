<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrf: '{{ csrf_token() }}' }</script>

        <title>Lara-articles App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
     
    </head>
    <body>
        <div id="app">
            <div class="container">
                <articles></articles>
            </div>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
