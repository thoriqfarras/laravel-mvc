@extends('layouts.main')

@section('container')  
  <link rel="stylesheet" href="{{ asset('css/floatingButton.css') }}">
  <div class="container mt-4">
    <h1>Events</h1>
    @foreach ($events as $item)
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="card-title">{{ $item["title"] }}</h5>
          <div class="d-flex" style="gap: 1rem; color: gray;">
            <span>{{ $item["time"] }}</span>
            <span>{{ $item["date"] }}</span>
          </div>
          <p class="card-text">{{ $item["description"] }}</p>
          <a href="/beranda/{{ $item["slug"] }}" class="btn btn-primary">Lihat Detail</a>
        </div>
      </div>
    @endforeach
  </div>
@endsection