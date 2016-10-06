<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $table = 'nodes';

    protected $fillable = [
        'title',
        'content',
        'author',
        'latitudes',
        'longitude',
    ];
}