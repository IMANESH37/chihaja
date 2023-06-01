@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="{{route('patienthome') }}" class="btn btn-warning">Back</a>
<form method="POST" action="{{route('updatepatient') }}">
@csrf

<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" placeholder="CIN" id="Cin" value="{{$patient[0]->id_p}}">
  </div>

<div class="form-group">
    <label for="email">Cin:</label>
    <input type="text" class="form-control" name="cin" placeholder="CIN" id="Cin" value="{{$patient[0]->cin}}">
  </div>
 

  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" name="nom" placeholder="Nom" id="Nom" value="{{$patient[0]->nom}}">
  </div>
 
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Email" id="Email" value="{{ $patient[0]->email}}">
  </div>

  <div class="form-group">
    <label for="email">MDP:</label>
    <input type="text" class="form-control" name="mdp" placeholder="mot pass" id="Email" value="{{ $patient[0]->mdp}}">
  </div>

  <div class="form-group">
    <label for="email">AGE:</label>
    <input type="text" class="form-control" name="age" placeholder="age" id="Email" value="{{ $patient[0]->age}}">
  </div>
  
  <div class="form-group">
    <label for="email">SEX:</label>
    <select class="form-control" id="sel1" name="sex" value="{{ $patient[0]->sex}}">
    <option>Homme</option>
    <option>Femme</option>

  </select>
  </div>

  <div class="form-group">
    <label for="email">TEL:</label>
    <input type="text" class="form-control" placeholder="tel" name="tel" id="Email" value="{{ $patient[0]->tel}}">
  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>

</div>
@endsection
