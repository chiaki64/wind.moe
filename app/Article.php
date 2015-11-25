<?php

namespace App;

use Carbon\Carbon;
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

    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopePublished($query){
        $query->where('created_at', '<=', Carbon::now());
    }

}
