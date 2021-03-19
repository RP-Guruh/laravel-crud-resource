<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events"; // nama table
    protected $fillable = ['event_name', 'start_event', 'finish_event', 'event_desc'];
    use HasFactory;
}
