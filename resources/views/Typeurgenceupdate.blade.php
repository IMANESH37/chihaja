@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">

<form method="POST" action="{{route('updatetype') }}">
@csrf

<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" placeholder="CIN" id="Cin" value="{{$type[0]->id}}">
  </div>

<div class="form-group">
    <label for="email">Titre:</label>
    <input type="text" class="form-control" name="titre" placeholder="Titre" id="Cin" value="{{$type[0]->nom}}">
  </div>
 
  <label for="email">Contenu:</label>
    <textarea class="form-control"  rows="20" name="text" id="Nom">
    {{$type[0]->text}}
    </textarea>


  

  <button type="submit" class="btn btn-primary">update</button>
</form>

</div>
@endsection
