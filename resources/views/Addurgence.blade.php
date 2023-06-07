@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<!-- <a href="{{route('urgencehome') }}" class="btn btn-warning">Back</a> -->
<form method="POST" action="{{route('addurgence') }}" enctype="multipart/form-data">
@csrf
  
 

  <div class="form-group">
    <label for="email">Nom:</label>
    <input type="text" class="form-control" name="nom" placeholder="Nom" id="Nom">
  </div>
 
 


  <div class="form-group">
      <input type="file" class="form-control-file border" name="photo">
    </div>
  

  <button type="submit" class="btn btn-primary">Add</button>
</form>

</div>
@endsection
