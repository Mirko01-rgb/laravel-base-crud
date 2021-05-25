@extends('layouts.main-layout')
@section('content')
  <h3>Ospite:</h3>
  <h4>ID --> [{{ $ospite -> id }}]</h4>
  <h4>NAME --> {{ $ospite -> name }}</h4>
  <h4>LASTNAME --> {{ $ospite -> lastname }}</h4>
  <h4>DATE_OF_BIRTH --> {{ $ospite -> date_of_birth }}</h4>
  <h4>DOCUMENT_TYPE --> {{ $ospite -> document_type }}</h4>
  <h4>DOCUMENT_NUMBER --> {{ $ospite -> document_number}}</h4>
@endsection
