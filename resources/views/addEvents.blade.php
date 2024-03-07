@extends('layouts.main')

@section('container')
  <link rel="stylesheet" href="{{ asset('css/addEvents.css') }}">
  <a href="/beranda" class="btn btn-outline-dark" style="margin-bottom: 1rem;">Back</a>
  <form method="POST" action="/beranda">
    @csrf
    <h1>Add an event</h1>
    <label for="name">Title</label>
    <input type="text" id="title" name="title">
    <label for="date">Date</label>
    <input type="date" id="date" name="date">
    <label for="time">Time</label>
    <input type="time" id="time" name="time">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <button type="submit" class="btn btn-primary btn-sm">Add Event</button>
  </form>
@endsection
