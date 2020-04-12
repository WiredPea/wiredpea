<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        'title',
    ];

    public function header()
    {
        return $this->belongsToMany(Article::class);
    }
}
