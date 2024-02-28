@extends('layouts.main')

@section('container')
  <link rel="stylesheet" href="{{ asset('css/addEvents.css') }}">
  <form>
    <h1>Add an event</h1>
    <label for="name">Name</label>
    <input type="text" id="name">
    <label for="date">Date</label>
    <input type="date" id="date">
    <label for="time">Time</label>
    <input type="time" id="time">
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <button type="button" class="btn btn-primary btn-sm">Add Event</button>
  </form>
@endsection