<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'content', 
        'user_id', 
        'post_id', 
        'comment_date',
        'comment-parent',
        'approved' 
    ];
}
