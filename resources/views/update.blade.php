
<head>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</head>


@extends('layouts.base')
@section('contenu')
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">

<form action="{{route('modifier',['id'=>$contactToUpdate['id'] ])}}" method="post"enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <fieldset >
            <legend><h4 class="card-title mt-3 text-center bg-primary">Edit</h4></legend>
        
        <div class="form-group input-group">
            <input  name="nom" value="{{$contactToUpdate['name']}}"class="form-control" placeholder="full name" type="text">
        </div>

        <p>Status:</p>

        <div>
        <input type="radio" id="huey" name="status" value="on"
                checked>
        <label for="huey">on</label>
        </div>

        <div>
        <input type="radio" id="dewey" name="status" value="off">
        <label for="dewey">off</label>
        </div>
        <div class="form-group input-group">
             <input type="file" name="image" class="form-control" placeholder="image">
        </div>

        <div class="form-group input-group">
            <input  type="number" name="numero" value="{{$contactToUpdate['phone']}}" class="form-control" >
        </div>
       
        <div class="form-group input-group">
            <input name="email" type="email" value="{{$contactToUpdate['email']}}"  class="form-control" >
        </div>
        <div class="form-group input-group">
            <input name="location" type="text" value="{{$contactToUpdate['location']}}"  class="form-control" >
        </div>
        <button type="subit" class="btn btn-outline-primary">Modifier</button>
        </fieldset>
        </form>
</article>
</div>
@endsection
<style>
    
    .card{
        width: 400px;
        margin: auto;
        border-color: blue;
        border: 2px groove;
        border-radius: 10px;
        
    }
    form{
        text-align: center;
    }
    legend{
        color: white;
    }
</style>
