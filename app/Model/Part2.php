<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part2 extends Model
{
    protected $table = 'part2';

    protected $fillable = [
        'media_id', 
        'test_id', 
        'level_id',
        'answer',
        'status',
    ];

    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }

    public function level()
    {
    	return $this->belongsTo('App\Model\Level', 'level_id', 'id');
    }

    public function test()
    {
    	return $this->hasOne('App\Model\Test', 'test_id', 'id');
    }

}
