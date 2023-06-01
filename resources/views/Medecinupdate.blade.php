@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="{{route('medecinhome') }}" class="btn btn-warning">Back</a>
<form method="POST" action="{{route('updatemedecin') }}">
@csrf

<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" placeholder="CIN" id="Cin" value="{{$medecin[0]->id_me}}">
  </div>

<div class="form-group">
    <label for="email">Cin:</label>
    <input type="text" class="form-control" name="cin" placeholder="CIN" id="Cin" value="{{$medecin[0]->cin}}">
  </div>
 

  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" name="nom" placeholder="Nom" id="Nom" value="{{$medecin[0]->nom}}">
  </div>
 
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Email" id="Email" value="{{ $medecin[0]->email}}">
  </div>

  <div class="form-group">
    <label for="email">MDP:</label>
    <input type="text" class="form-control" name="mdp" placeholder="mot pass" id="Email" value="{{ $medecin[0]->mdp}}">
  </div>




  <div class="form-group">
    <label for="email">TEL:</label>
    <input type="text" class="form-control" placeholder="tel" name="tel" id="Email" value="{{ $medecin[0]->tel}}">
  </div>

  <div class="form-group">
    <label for="email">SPECIALITE:</label>
    <input type="text" class="form-control" placeholder="specialite" name="specialite" id="Email">
  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>

</div>
@endsection
