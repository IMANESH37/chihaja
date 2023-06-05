@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<a href="./home" class="btn btn-warning">Back</a>
<a href="./addurgence" type="button" class="btn btn-success"><button
                  class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                  <svg
                    class="w-4 h-4 mr-2 -ml-1"
                    fill="currentColor"
                    aria-hidden="true"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                      clip-rule="evenodd"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                  <span>Ajouter Urgence</span>
                </button>
              </div></a>
              <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
    <thead>
    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                    <th class="px-4 py-3">ID</th>
        <th class="px-4 py-3">NOM</th>
        <th class="px-4 py-3">icon</th>
        <th class="px-4 py-3">Typeurgence</th>
        <th class="px-4 py-3">OPTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($urgences as $key=>$urgence)
      <tr>
        <td class="px-4 py-3">{{ $urgence->id}}</td>
        <td class="px-4 py-3">{{ $urgence->nom}}</td>

        <td class="px-4 py-3">  <img src="{{ $urgence->logo}}" style="width:70px" /></td>


         <td class="text-center"><a href="{{url('/typeurgencehome/'.$urgence->id.'/'.$urgence->nom)}}"> <i style="font-size:29px;margin-left:-50px"  class="fa">&#xf06e;</i>  </a></td>
        <td class="px-4 py-3">
      
        <a href="{{url('/deleteurgence/'.$urgence->id)}}" type="button" class="btn btn-danger"><i class="fa fa-trash-o" style="font-size:24px"></i></a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
</div>
@endsection
