<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'wind_category';

    protected $fillable = [
        'category',
        'ArticleNumber',
    ];
}
