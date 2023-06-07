@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">

<form method="POST" action="{{route('updatetype') }}">
@csrf

<div class="mb-6">
    
    <input type="hidden" class="form-control" name="id" placeholder="CIN" id="Cin" value="{{$type[0]->id}}">
  </div>

<div class="mb-6">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre:</label>
<input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" value="{{$type[0]->nom}}">
  </div>
 
  <label for="email">Contenu:</label>
    <textarea class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"  rows="20" name="text" id="Nom">
    {{$type[0]->text}}
    </textarea>


  

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirmer</button>
</form>

</div>
@endsection
