<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'wind_articles';

    protected $fillable = [
        'title',
        'text',
        'author',
        'category',
        'tags',
        'updated_at',
        'published_at',
    ];

}
