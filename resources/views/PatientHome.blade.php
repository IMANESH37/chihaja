@extends('layouts.app')

@section('content')
<div class="container pt-5" style="width:100%">
<!-- <a href="./home" class="btn btn-warning">Back</a> -->
<a href="./addpatient" ><div>
                <button
                  class="flex items-center justify-between px-4 py-2  text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <line x1="12" y1="5" x2="12" y2="19"></line>
  <line x1="5" y1="12" x2="19" y2="12"></line>
</svg>

                  <span>Ajouter</span>
                </button>
              </div></a>

<div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
   
              <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
      
        <!-- <th class="px-4 py-3">ID</th> -->
        <!-- <th class="px-4 py-3">photo</th> -->
        <th class="px-4 py-3">CIN</th>
        <th class="px-4 py-3">NOM</th>
        <th class="px-4 py-3">EMAIL</th>
        <th class="px-4 py-3">MDP</th>
        <th class="px-4 py-3">SEX</th>
        <th class="px-4 py-3">AGE</th>
        <th class="px-4 py-3">TEL</th>
        <th class="px-4 py-3">OPTIONS</th>
      </tr>
    </thead>
    <tbody  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"  >
        @foreach($patients as $key=>$patient)
        <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
        <!-- <td class="px-4 py-3">{{ $patient->id_p}}</td> -->
        <img  class="object-cover w-full h-full rounded-full" src="{{$patient->img}}" alt=""
                              loading="lazy" />
                              <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{ $patient->nom}}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              10x Developer
                            </p>
                          </div>
                        </div>
       </td>                     
        <td class="px-4 py-3 text-sm">{{ $patient->cin}}</td>
        <!-- <td>{{ $patient->nom}}</td> -->
        <td class="px-4 py-3 text-sm">{{ $patient->email}}</td>
        <td class="px-4 py-3 text-sm">{{ $patient->mdp}}</td>
        <td class="px-4 py-3 text-sm">{{ $patient->sex}}</td>
        <td class="px-4 py-3 text-sm">{{ $patient->age}}</td>
        <td class="px-4 py-3 text-sm">+212{{ $patient->tel}}</td>
        <td class="px-4 py-3">
          <a href="{{url('/editpatient/'.$patient->id_p)}}" type="button" ><div class="flex items-center space-x-4 text-sm">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
            </a>
        <a href="{{url('/deletepatient/'.$patient->id_p)}}" type="button" >
                         <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                      
        </a>
    </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection
