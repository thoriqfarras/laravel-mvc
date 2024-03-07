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

  public function store(Request $request)
  {
    $data = Events::create([
      'title' => $request->title,
      'date' => $request->date,
      'time' => $request->time,
      'description' => $request->description,
    ]);

    return redirect('/beranda');
  }

  public function destroy($eventId)
  {
    Events::destroy($eventId);
    return redirect('/beranda');
  }

  public function edit($eventId)
  {
    $event = Events::find($eventId);
    return view('editEvents', [
      "title" => 'Edit event',
      "event" => $event
    ]);
  }

  public function update(Request $request, string $eventId)
  {
    $event = Events::find($eventId)->update([
      'title' => $request->title,
      'description' => $request->description,
      'date' => $request->date,
      'time' => $request->time
    ]);

    return redirect("/beranda/$eventId");
  }

  public function formAdd()
  {
    return view('addEvents', ["title" => "Tambah Event"]);
  }
}
