<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    protected $fillable = [
        'name', 
        'email', 
        'password',

    ];

    protected $hidden = [
    	'password', 
    	'remember_token'
	];

    public function user_test()
    {
        $this->belongsTo('App\Model\User_test', 'user_id');
    }

}
