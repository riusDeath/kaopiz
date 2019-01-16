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
        return $this->belongsTo(Passage::class, 'passage_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo('App\Model\Level', 'level_id', 'id');
    }
    
    public function test()
    {
        $this->hasOne('App\Model\Test', 'test_id', 'id');
    }

}
