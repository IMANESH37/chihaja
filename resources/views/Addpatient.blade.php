@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="{{route('patienthome') }}" class="btn btn-warning">Back</a>
<form method="POST" action="{{route('storepatient') }}"  enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="email">Cin:</label>
    <input type="text" class="form-control" name="cin" placeholder="CIN" id="Cin">
  </div>
 

  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" name="nom" placeholder="Nom" id="Nom">
  </div>
 
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="Email" id="Email">
  </div>

  <div class="form-group">
    <label for="email">MDP:</label>
    <input type="text" class="form-control" name="mdp" placeholder="mot pass" id="Email">
  </div>

  <div class="form-group">
    <label for="email">AGE:</label>
    <input type="text" class="form-control" name="age" placeholder="age" id="Email">
  </div>
  
  <div class="form-group">
    <label for="email">SEX:</label>
    <select class="form-control" id="sel1" name="sex">
    <option>Homme</option>
    <option>Femme</option>

  </select>
  </div>

  <div class="form-group">
      <input type="file" class="form-control-file border" name="photo">
    </div>
  
  <div class="form-group">
    <label for="email">TEL:</label>
    <input type="text" class="form-control" placeholder="tel" name="tel" id="Email">
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection
