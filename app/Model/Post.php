<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
    	'status',
    	'title',
    	'post_excerpt',
    	'category_id',
    	'post_modified',
    	'post_date',
        'content', 
        'author',
        'avatar',
        'updated_at'
    ];

    const UPDATED_AT = 'updated_at';

    public function scopesearch($query)
    {
        if (empty(request()->search)) {
            return $query;
        } 
            
        return $query->where('title', 'like', '%'.request()->search.'%')
                    ->orWhere('content', 'like', '%'.request()->search.'%')
                    ->orWhere('post_excerpt', 'like', '%'.request()->search.'%');
    }

    public function post_parent()
    {
       return $this->belongsTo('App\Model\Post', 'post_modified', 'id');
    }
    
    public function getauthor()
    {
        return $this->hasOne('App\Model\User', 'id', 'author');
    }

    public function Revisions()
    {
        return \DB::table('posts')
                    ->where('id',$this->post_modified)
                    ->orWhere('post_modified', $this->post_modified)
                    ->orWhere('post_modified', $this->id)
                    ->orderBy('updated_at', 'desc')
                    ->get();
    }
}
