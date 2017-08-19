<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'description', 'published', 'cover'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
