<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../public/img/icon.png" type="image/png" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>eBookShop</title>
        <!-- Styles -->
        <link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">
        <link href="{{ asset( 'css/styles.css' ) }}" rel="stylesheet">
    </head>
    <body>
        <div id="nose"></div>
        <script src="{{ asset( 'js/nose.js' ) }}"></script>
    </body>
</html>