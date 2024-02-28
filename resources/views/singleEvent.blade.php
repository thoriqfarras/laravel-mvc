{{-- @dd($event) --}}
@extends('layouts.main')

@section('container')
  <link rel="stylesheet" href="{{ asset('css/singleEvent.css') }}">
  <div class="event">
    <h1>{{ $event["title"] }}</h1>
    <div class="datetime">
      <span>{{ $event["time"] }}</span> | 
      <span>{{ $event["date"] }}</span>
    </div>
    <p>{{ $event["description"] }}</p>
    <button type="button" class="btn btn-primary">Edit</button>
    <button type="button" class="btn btn-danger">Delete</button>
  </div>
@endsection