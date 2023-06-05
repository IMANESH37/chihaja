@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">

<h1  class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">{{$urgence}}</h1>
<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
    <thead>
    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                    <th class="px-4 py-3">ID</th>
                    <th class="px-4 py-3">Text</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($typeurgences as $key=>$typeurgence)
      <tr>
         <td class="px-4 py-3">{{ $typeurgence->id}}</td>
         <td class="px-4 py-3">{{ $typeurgence->text}}</td>
   
       
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
</div>
@endsection
