<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // add all other fields
     protected $fillable = [
        'title',
        'body',
    ];

    // Table
    protected $table = 'posts';

}
