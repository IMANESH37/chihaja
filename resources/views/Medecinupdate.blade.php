@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">

<h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Modifier les infos du Medcin
 </h4>

<!-- <a href="{{route('medecinhome') }}" class="btn btn-warning">Back</a> -->
<form method="POST" action="{{route('updatemedecin') }}">
@csrf

<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" placeholder="CIN" id="Cin" value="{{$medecin[0]->id_me}}">
  </div>

  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cin:</label>
    <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
     value="{{$medecin[0]->cin}}">
  </div>
 

  <div class="mb-6">
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom:</label>
  <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
  value="{{$medecin[0]->nom}}">

</div>
 
<div class="mb-6">
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
  <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
  value="{{$medecin[0]->email}}">

</div>

<div class="mb-6">
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de Passe:</label>
  <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
  value="{{$medecin[0]->mdp}}">

</div>


<div class="mb-6">
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tel:</label>
  <input type="number" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
  value="{{$medecin[0]->tel}}">

</div>

<div class="mb-6">
  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Specialité:</label>
  <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
  value="{{$medecin[0]->specialite}}">
</div>
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmer</button>
</form>

</div>
@endsection
