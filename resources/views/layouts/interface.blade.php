<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <title> Interface | @yield('title', 'Home')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">

        <script src="{{ asset('js/app.js')}}"></script>
       
        @section('scripts')
        @show

    </head>
    <body>




             @yield('content')


             <!-- end of main -->





    </body>
</html>

