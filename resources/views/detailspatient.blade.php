@extends('layouts.app')
@section('content')
<style>
  .gradient-custom {
    /* fallback for old browsers */
    background: #f6d365;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgb(127, 223, 249));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgb(117, 232, 245));
  }
</style>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ $patient->img }}" alt="Avatar" class="img-fluid my-5" style="width: 80px;">
              <h5>{{ $patient->nom }}</h5>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
            
                <h6>Détails sur le patient</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted">{{ $patient->age }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Sex</h6>
                    <p class="text-muted">{{ $patient->sex }}</p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{$patient->email }}  </p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Numéro de téléphone</h6>
                    <p class="text-muted">{{ $patient->tel }}</p>
                  </div>
                </div>
                <h6>Détails sur l'urgence</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Type d'urgence</h6>
                    <p class="text-muted">{{ $centreurgence->nomurgence }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Etat</h6>
                    <p class="text-muted">{{ $centreurgence->accepte }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection