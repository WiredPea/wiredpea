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

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function addTag(Tag $tag)
    {
        $this->tags()->attach($tag);
    }

    public function removeTag(Tag $tag)
    {
        $this->tags()->detach($tag);
    }

    public function header()
    {
        $this->hasOne(Header::class);
    }
}
