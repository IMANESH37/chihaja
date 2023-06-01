@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">

<h1 class="mt-5">{{$urgence}}</h1>
<table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Text</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($typeurgences as $key=>$typeurgence)
      <tr>
        <td>{{ $typeurgence->id}}</td>
        <td>{{ $typeurgence->text}}</td>
   
       
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
