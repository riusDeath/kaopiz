<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    const UPDATED_AT = 'updated_at';
    
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role',
        'status',
        'created_at',
        'update_at',

    ];

    protected $hidden = [
    	'password', 
    	'remember_token'
	];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'user_id', 'id');
    }

    public function user_test()
    {
        $this->belongsTo('App\Model\User_test', 'user_id');
    }

    public function scopeSearch($query)
    {
        if (empty(request()->search)) {
            return $query;
        } 
            
        return $query->where('name', 'like', '%'.request()->search.'%')->orWhere('id', request()->search);
    }
}
