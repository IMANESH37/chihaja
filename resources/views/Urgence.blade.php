@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="./home" class="btn btn-warning">Back</a>
<a href="./addurgence" type="button" class="btn btn-success">AJOUTER Urgence</a>
<table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>icon</th>
        <th>Typeurgence</th>
        <th>OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($urgences as $key=>$urgence)
      <tr>
        <td>{{ $urgence->id}}</td>
        <td>{{ $urgence->nom}}</td>

        <td>  <img src="{{ $urgence->logo}}" style="width:70px" /></td>


         <td class="text-center"><a href="{{url('/typeurgencehome/'.$urgence->id.'/'.$urgence->nom)}}"> <i style="font-size:29px;margin-left:-50px"  class="fa">&#xf06e;</i>  </a></td>
        <td>
      
        <a href="{{url('/deleteurgence/'.$urgence->id)}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
