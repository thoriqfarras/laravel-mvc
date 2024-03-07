{{-- @dd($event) --}}
@extends('layouts.main')

@section('container')
  <link rel="stylesheet" href="{{ asset('css/singleEvent.css') }}">
  <div class="event">
    <a href="/beranda" class="btn btn-outline-dark" style="margin-bottom: 1rem;">Back</a>
    <h1>{{ $event["title"] }}</h1>
    <div class="datetime">
      {{-- <span>{{ $event["time"] }}</span> | 
      <span>{{ $event["date"] }}</span> --}}
      <span>{{ $event["dateTime"] }}</span>
    </div>
    <p>{{ $event["description"] }}</p>
    <form action="/beranda/{{ $event->id }}" method="POST">
      @method("DELETE")
      @csrf
      <a href="/beranda/{{ $event->id }}/edit" class="btn btn-primary">Edit</a>
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
@endsection