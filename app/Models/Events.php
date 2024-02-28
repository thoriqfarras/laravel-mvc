<?php

namespace App\Models;


class Events
{
  // Anggap saja data di bawah diambil dari database.
  static $events = [
    [
      "title" => "Gemastik 2024",
      "slug" => "gemastik-2024",
      "time" => "13:00",
      "date" => "05/03/24",
      "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quas quidem dolores saepe! Velit nulla ipsum aspernatur?"
    ],
    [
      "title" => "PKM 2024",
      "slug" => "pkm-2024",
      "time" => "10:00",
      "date" => "17/03/24",
      "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus deleniti ea, eius velit voluptas debitis quo optio possimus facere, eos modi ad unde!"
    ],
    [
      "title" => "LIDM 2024",
      "slug" => "lidm-2024",
      "time" => "09:00",
      "date" => "24/03/24",
      "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quas quidem dolores saepe! Velit nulla ipsum aspernatur?"
    ]
  ];

  public static function all()
  {
    return collect(self::$events);
  }

  public static function find($slug)
  {
    return static::all()->firstWhere('slug', $slug);
  }
}
