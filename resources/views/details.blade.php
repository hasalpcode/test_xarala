<head>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</head>
@extends('layouts.base')
@section('contenu')

    <div class="card ">
        <div class="card-title bg-info"><h5>Detail contact</h5></div>
        <div class="card-body"> 

            <p>Id: {{$contactdetail['id']}}</p>
            <p>Nom: {{$contactdetail['nom']}}</p>
            <p>Prenom: {{$contactdetail['prenom']}}</p>
            <p>Numero: {{$contactdetail['numero']}}</p>
            <p>Email: {{$contactdetail['email']}}</p>

        </div>
    </div>
@endsection
    <style>
        .card{
            margin: auto;
            width: 400px;
            
            text-align: center;
        }
        .card-title{
            color: white;
            text-align: center;
        }
    </style>
