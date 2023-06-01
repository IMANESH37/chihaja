@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6">
        <div class="card" style="border-radius: .5rem;">
          <div class="card-body p-4">
            <h5 class="text-center mb-4">Add Centreurgence</h5>
            <form method="POST" action="{{ route('centreurgence.create') }}">
              @csrf
              <div class="mb-3">
                <label for="nomurgence" class="form-label">Nom d'urgence</label>
                <input type="text" class="form-control" id="nomurgence" name="nomurgence" required>
              </div>
              <div class="mb-3">
                <label for="accepte" class="form-label">Accepte</label>
                <select class="form-select" id="accepte" name="accepte" required>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="idp" class="form-label">Patient ID</label>
                <select class="form-select" id="idp" name="idp" required>
                  @foreach($patients as $patient)
                    <option value="{{ $patient->id_p }}">{{ $patient->id_p }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Add Centreurgence</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection