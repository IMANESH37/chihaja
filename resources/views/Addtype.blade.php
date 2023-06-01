@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">

<form method="POST" action="{{route('storetype') }}">
@csrf

<div class="form-group">

    <input type="hidden" class="form-control" name="id" value="{{$idd}}" >
  </div>
 
  <div class="form-group">
    <label for="email">Titre:</label>
    <input type="text" class="form-control" name="titre" placeholder="Titre" id="Cin">
  </div>
 

 
    <label for="email">Contenu:</label>
    <textarea class="form-control"  rows="20" name="text" id="Nom"></textarea>

 

 
  <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection
