<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'audio_file', 
        'start_time',
        'end_time',
        'image',
        'venue',
    ]; 

}
