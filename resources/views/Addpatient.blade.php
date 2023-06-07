@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">

<h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Ajouter un patient
 </h4>
<!-- <a href="{{route('patienthome') }}" class="btn btn-warning">Back</a> -->
<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"  >

<form method="POST" action="{{route('storepatient') }}"  enctype="multipart/form-data">
@csrf
<div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cin:</label>
    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="cin" placeholder="CIN" id="Cin">
  </div>
 

  <div class="mb-6">

    <label for="email">Nom:</label>
    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="nom" placeholder="Nom" id="Nom">
  </div>
 
  <div class="mb-6">

    <label for="email">Email:</label>
    <input type="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="email" placeholder="Email" id="Email">
  </div>

  <div class="mb-6">

    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MDP:</label>
    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="mdp" placeholder="mot pass" id="Email">
  </div>

  <div class="mb-6">

    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">AGE:</label>
    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" name="age" placeholder="age" id="Email">
  </div>
  
  <div class="mb-6">

  <label for="sel1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SEX:</label>
  <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
 id="sel1" name="sex">
    <option>Homme</option>
    <option>Femme</option>

  </select>
  </div>

  <div class="mb-6">
      <input type="file" class="form-control-file border" name="photo">
    </div>
  
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TEL:</label>
    <input type="text" class="form-control" placeholder="tel" name="tel" id="Email">
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajouter</button>
</form>

</div>
@endsection
