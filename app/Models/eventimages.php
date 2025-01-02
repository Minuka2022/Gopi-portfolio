<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImages extends Model
{
    Use HasFactory;

    protected $fillable = [
        'event_id',
        'image'
    ];
}
