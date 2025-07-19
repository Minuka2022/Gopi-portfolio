<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
    ];

    // Relationship with eventimages model
    public function eventImages()
    {
        return $this->hasMany(Eventimages::class, 'event_id');
    }
}
