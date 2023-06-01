@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="./home" class="btn btn-warning">Back</a>
<a href="./addpatient" class="btn btn-success">AJOUTER PATIENTS</a>

<table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>photo</th>
        <th>CIN</th>
        <th>NOM</th>
        <th>EMAIL</th>
        <th>MDP</th>
        <th>SEX</th>
        <th>AGE</th>
        <th>TEL</th>
        <th>OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($patients as $key=>$patient)
      <tr>
        <td>{{ $patient->id_p}}</td>
        <td><img src="{{$patient->img}}" width="110" /></td>
        <td>{{ $patient->cin}}</td>
        <td>{{ $patient->nom}}</td>
        <td>{{ $patient->email}}</td>
        <td>{{ $patient->mdp}}</td>
        <td>{{ $patient->sex}}</td>
        <td>{{ $patient->age}}</td>
        <td>0{{ $patient->tel}}</td>
        <td><a href="{{url('/editpatient/'.$patient->id_p)}}" type="button" class="btn btn-warning"><i class="fa fa-cog fa-spin" style="font-size:24px"></i></a>
        <a href="{{url('/deletepatient/'.$patient->id_p)}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
