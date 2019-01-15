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
        $this->hasOne('App\Model\Media', 'media_id', 'id');
    }

    public function level()
    {
        $this->hasOne('App\Model\Level', 'level_id', 'id');
    }

    public function test()
    {
        $this->hasOne('App\Model\Test', 'test_id', 'id');
    }

}
