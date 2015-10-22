<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'wind_notes';

    protected $fillable = [
        'text',
        'tags',
    ];


}
