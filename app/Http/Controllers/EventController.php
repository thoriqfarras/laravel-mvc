<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
  public function index()
  {
    return view('events', [
      "title" => "Events",
      "events" => Events::all()
    ]);
  }
  public function show($slug)
  {
    $event = Events::find($slug);
    return view('singleEvent', [
      "title" => $event["title"],
      "event" => $event
    ]);
  }

  public function formAdd()
  {
    return view('addEvents', ["title" => "Tambah Event"]);
  }
}
