@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<!-- <a href="{{route('urgencehome') }}" class="btn btn-warning">Back</a> -->
<a href="{{url('/addtype/'.$idd)}}" type="button" class="btn btn-success">
  <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
    <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
      <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" fill-rule="evenodd"></path>
    </svg>
    <span>Ajouter Urgence</span>
  </button>
</a>
</div>
<h1 class="mb-4 text-lg font-semibold text-center text-gray-600 dark:text-gray-300">{{$urgence}}</h1>
<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
  <div class="w-full overflow-x-auto">
    <table class="w-full whitespace-no-wrap">
      <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3">ID</th>
          <th class="px-4 py-3">NOM</th>
          <th class="px-4 py-3">CONTENU</th>
          <th class="px-4 py-3">OPTIONS</th>
        </tr>
      </thead>
      <tbody>
        @foreach($typeurgences as $key=>$typeurgence)
        <tr>
          <td class="px-4 py-3">{{ $typeurgence->id}}</td>
          <td class="px-4 py-3">{{ $typeurgence->nom}}</td>
          <td class="text-center">{{-- Ajoutez la classe text-center ici --}}
            <a href="{{url('/detailsurgencehome/'.$typeurgence->id.'/'.$typeurgence->nom)}}">
              <i style="font-size:29px;margin-left:-50px" class="fa">&#xf06e;</i>
            </a>
          </td>
          <td class="px-4 py-3">
            <a href="{{url('/edittype/'.$typeurgence->id)}}" type="button" class="btn btn-warning">
              <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                </svg>
              </button>
            </a>
            <a href="{{url('/deletetype/'.$typeurgence->id)}}" type="button" class="btn btn-danger">
              <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
