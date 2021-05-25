@extends('layouts.main-layout')
@section('content')
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
       <h1>NewOspite:</h1>
      </div>
    </div>
  </div>

  <form method="POST" action="{{route('store')}}"  >
  @csrf
  @method('POST')
  <div class="form-group row">
    <label for="name" class="col-md-3 col-form-label text-md-right">
      Name
    </label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control" name="name">
    </div>
  </div>

  <div class="form-group row">
    <label for="lastname" class="col-md-3 col-form-label text-md-right">
      Lastname
    </label>
    <div class="col-md-6">
      <input id="lastname" type="text" class="form-control" name="lastname">
    </div>
  </div>

  <div class="form-group row">
    <label for="date_of_birth" class="col-md-3 col-form-label text-md-right">
      Date_of_birth
    </label>
    <div class="col-md-6">
      <input id="date_of_birth" type="date" class="form-control" name="date_of_birth">
    </div>
  </div>

  <div class="form-group row">
    <label for="document_type" class="col-md-3 col-form-label text-md-right">
      Document_type
    </label>
    <div class="col-md-6">
      <input id="document_type" type="text" class="form-control" name="document_type">
    </div>
  </div>

  <div class="form-group row">
    <label for="document_number" class="col-md-3 col-form-label text-md-right">
      Document_number
    </label>
    <div class="col-md-6">
      <input id="document_number" type="text" class="form-control" name="document_number">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary">
    Create
    </button>
    </div>
  </div>
</form>

@endsection
