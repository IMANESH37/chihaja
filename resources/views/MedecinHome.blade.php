@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="./home" class="btn btn-warning">Back</a>
<a href="./addmedecin" type="button" class="btn btn-success">AJOUTER  MEDECIN</a>
<table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>CIN</th>
        <th>NOM</th>
        <th>EMAIL</th>
        <th>MDP</th>
        <th>Specialite</th>
        <th>TEL</th>
        <th>OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($medecins as $key=>$medecin)
      <tr>
        <td>{{ $medecin->id_me}}</td>
        <td>{{ $medecin->cin}}</td>
        <td>{{ $medecin->nom}}</td>
        <td>{{ $medecin->email}}</td>
        <td>{{ $medecin->mdp}}</td>
        <td>{{ $medecin->specialite}}</td>
        <td>{{ $medecin->tel}}</td>
        
        <td><a href="{{url('/editmedecin/'.$medecin->id_me)}}" type="button" class="btn btn-warning"><i class="fa fa-cog fa-spin" style="font-size:24px"></i></a>
        <a href="{{url('/deletemedecin/'.$medecin->id_me)}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
