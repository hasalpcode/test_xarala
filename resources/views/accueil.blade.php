
@extends('layouts.base')
@section('contenu')
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<div class="row">
    <h1 style="margin-bottom: 80px; margin-top:50px"><b>Users Table UI</b></h1>
</div>
<a href="{{route('newContact')}}" style="float: right;">
    <button class="btn btn-primary"> Ajouter</button> <br><br>
</a>
<table  class="table " style=" border:none" cellspacing="150px">
    <thead  style="color: black;">
    <tr>
        <th colspan="2">User</th><th >Status</th> <th>Location</th><th>Phone</th><th>Contact</th> <th>Action</th>
        
    </tr>
    </thead>
    <tbody>
    @forelse($contacts as $contact)
    
    <tr>
    <td>  <img src="/img/{{$contact['PHOTO']}}" id="profile" alt="profile"></td>
        <td> <b>{{$contact['name']}}</b><br> {{$contact['email']}} </td>

        @if($contact['statut'] == "on")
        
        <td style="white-space: nowrap; text-align:center" > 
            Active<svg style="color:green;margin-top:-13px; float:left" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dot " viewBox="0 0 16 16">
        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/> 
        </svg>
      
        </td>
    @else

    <td style="white-space: nowrap; text-align:center" > 
            Inactive<svg style="color:red;margin-top:-13px; float:left" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dot " viewBox="0 0 16 16">
        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/> 
        </svg>
      
    </td>
    @endif
        <td> {{$contact['location']}} </td>
        <td> {{$contact['phone']}} </td>
        <td> <button class="btn btn-primary">Contact</button></td>

        
        <td>
            <svg style="color:blue; "  class="dropdown-togle"role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"id="onglet"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical " viewBox="0 0 16 16">
            
     
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
    
            </svg>  
            <nav  class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <ul >
            <li><a class="dropdown-item" href="{{route('modiformulaire',['id'=>$contact['id']])}}">Edit&nbsp;<svg style="float:left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg></a></li>
            <li><a class="dropdown-item" href="{{route('supprimer',['id'=>$contact['id']])}}"style="float:left; color:red" >Delete 
            <svg style="float:left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
            </a></li>
        </ul>
        
        
        </nav>
    </td>


    </tr>   @empty
    <p>Loading..</p>
    @endforelse
    </div>
    </tbody>


</table>
@endsection

