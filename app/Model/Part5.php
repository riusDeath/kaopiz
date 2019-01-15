<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part5 extends Model
{
    protected $table = 'part5';

    protected $fillable = [
        'test_id', 
        'level_id',
        'answer',
        'question',
        'optionA',
        'optionB',
        'optionC',
        'optionD',
        'script_answer',
        'status',
    ];
    
    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');    }

    public function level()
    {
        return $this->belongsTo('App\Model\Level', 'level_id', 'id');
    }


    public function test()
    {
        $this->hasOne('App\Model\Test', 'test_id', 'id');
    }

}
