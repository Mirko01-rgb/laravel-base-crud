@extends('layouts.main-layout')
@section('content')
  <h1>Ospiti:</h1>
  <ul>
    @foreach ($ospiti as $ospite)
      <li>
        <a href="{{ route('ospite', $ospite -> id) }}">
          [{{ $ospite -> id }}]
          {{ $ospite -> name }}
          {{ $ospite -> lastname }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
