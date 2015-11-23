<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'wind_comments';

    protected $fillable = [
        'pid',
        'parent',
        'author',
        'authorID',
        'ownerID',
        'text',
        'email',
        'url',
        'ip',
        'agent',
        'published',
    ];
}
