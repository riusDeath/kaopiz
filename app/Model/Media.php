<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Part1;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'mediaFile', 
        'script_answer',
    ];

    public function part3()
    {
    	return $this->hasMany('App\Model\Part3', 'media_id', 'id');
    }

    public function part4()
    {
    	return $this->hasMany('App\Model\Part4', 'media_id', 'id');
    }
    
}
