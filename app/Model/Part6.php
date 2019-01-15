<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Part6 extends Model
{
    protected $table = 'part6';

    protected $fillable = [
        'test_id', 
        'level_id',
        'answer',
        'optionA',
        'optionB',
        'optionC',
        'optionD',
        'passage_id',
        'status',
    ];

    public function passage()
    {
        $this->hasOne('App\Model\Passage', 'passage_id', 'id');
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
