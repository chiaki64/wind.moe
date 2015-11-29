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
        'created_at',
        'updated_at',
        'published_at',
    ];

//    public function setPublishedAtAttribute($date){
//        $this->attributes['updated_at'] = Carbon::createFromFormat('Y-m-d', $date);
//    }

    public function scopePublished($query){
        $query->where('created_at', '<=', Carbon::now('Asia/Shanghai'));
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
