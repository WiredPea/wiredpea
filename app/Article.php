<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id',
        'published',
        'publishedDate',
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
