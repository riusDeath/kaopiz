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
        'comment_parent',
        'status',
        'author' 

    ];

    public function scopeSearch($query)
    {
        if (empty(request()->search)) {
            return $query;
        } 
            
        return $query->where('author', 'like', '%'.request()->search.'%')->orWhere('post_id', request()->search);
    }

    public function post()
    {
    	return $this->belongsTo('App\Model\Post', 'post_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }
    
    public function replies()
    {
        return $this->hasMany('App\Model\Comment', 'comment_parent', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Model\Comment', 'comment_parent', 'id');
    }
}
