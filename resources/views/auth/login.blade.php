@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  </head>
  <body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
      <!-- left side -->
      <div class="flex flex-col justify-center p-8 md:p-14 w-full md:w-auto">
        <a class="flex items-center mb-8">
          <img src="https://res.cloudinary.com/do2zzzbd0/image/upload/v1685420844/logo_ivipyh.png" class="h-20 mr-6" alt="Flowbite Logo" />
          <span class="text-4xl text-gray-500 font-bold">Se Connecter</span>
        </a>

        <span class="font-light text-gray-400 mb-6">
          Bienvenu! Veuillez entrez vos details
        </span>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="py-3">
          <span class="mb-2 text-md">Email</span>
          <input
            type="text"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            name="email"
            id="email"
            value="{{ old('email') }}"
          />
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="py-4">
          <span class="mb-2 text-md">Password</span>
          <input
            type="password"
            name="password"
            id="password"
            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
          />
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="flex justify-between w-full py-4">
          <div class="mr-24">
            <input type="checkbox" name="ch" id="ch" class="mr-2" />
            <span class="text-md">Remember for 30 days</span>
          </div>
          <span class="font-bold text-gray-400 text-md">Forgot password?</span>
        </div>
        <button
        type="submit"  class="w-full bg-blue-400 text-white p-2 rounded-lg mb-6 hover:bg-blue-500 hover:text-black hover:border hover:border-gray-300"
        >
         Log in
        </button>
        </form>
      </div>

        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="https://res.cloudinary.com/do2zzzbd0/image/upload/v1685471403/tabibiimage_qvb4do.png"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
         
        </div>
      </div>
    </div>
  </body>
</html>
@endsection
