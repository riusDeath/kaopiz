<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
    	'status',
    	'title',
    	'excerpt',
    	'status',
    	'menu_order',
    	'date',
    	'modified',
    	'post_parent',
        'content', 
    ];
}
