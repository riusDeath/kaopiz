<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User_test extends Model
{
    protected $table = 'user_test';

    protected $fillable = [
        'user_id', 
        'test_id', 
        'listening',
        'reading',
    ];

    public function User()
    {
        $this->hasMany('App\Model\User', 'user_id', 'id');
    }

    public function Test()
    {
        $this->hasMany('App\Model\Test', 'test_id', 'id');
    }

    public function user_test()
    {
        $this->belongsTo('App\Model\User_test', 'user_id');
    }
    
}
