@extends('layouts.interface')

@section('title','Interface')



@section('content')



    <div id="app">
        app.text
        <div class="container">
            <example-component></example-component>
        </div>
       <div class="container2">
            <prova1></prova1>
        </div>
        <div class="container3">
            <prova></prova>
        </div>
        <div class="container4">
            
<nav-menu title="{{ config('app.name', 'Laravel') }}" url="{{ url('/') }}">
</nav-menu>
        </div>
        
    </div>
<script src="{{ asset('js/app.js')}}"></script>






@endsection