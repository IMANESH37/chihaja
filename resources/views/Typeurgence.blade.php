@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="{{route('urgencehome') }}" class="btn btn-warning">Back</a>
<a href="{{url('/addtype/'.$idd)}}" type="button" class="btn btn-success">AJOUTER TYPE URGENCES</a>
<h1 class="mt-5">{{$urgence}}</h1>
<table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>CONTENU</th>
        <th>OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($typeurgences as $key=>$typeurgence)
      <tr>
        <td>{{ $typeurgence->id}}</td>
        <td>{{ $typeurgence->nom}}</td>

     
         <td class="text-center"><a href="{{url('/detailsurgencehome/'.$typeurgence->id.'/'.$typeurgence->nom)}}"> <i style="font-size:29px;margin-left:-50px"  class="fa">&#xf06e;</i>  </a></td>
        <td>
        <a href="{{url('/edittype/'.$typeurgence->id)}}" type="button" class="btn btn-warning"><i class="fa fa-cog fa-spin" style="font-size:24px"></i></a>
        <a href="{{url('/deletetype/'.$typeurgence->id)}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
