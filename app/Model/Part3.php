<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part3 extends Model
{
    protected $table = 'part3';

    protected $fillable = [
        'media_id', 
        'test_id', 
        'level_id',
        'answer',
        'question',
        'optionA',
        'optionB',
        'optionC',
        'optionD',
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
        return $this->belongsTo('App\Model\Test', 'test_id', 'id');
    }

}
