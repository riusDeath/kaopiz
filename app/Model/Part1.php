<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part1 extends Model
{
    protected $table = 'part1';

    protected $fillable = [
        'media_id', 
        'test_id', 
        'level_id',
        'answer',
        'picture',
        'status',
    ];

    public function media()
    {
    	return $this->belongsTo(Media::class, 'media_id', 'id');
    }

    public function level()
    {
    	return $this->hasOne('App\Model\Level', 'id', 'level_id');
    }

    public function test()
    {
    	return $this->hasOne('App\Model\Test', 'test_id', 'id');
    }

}
