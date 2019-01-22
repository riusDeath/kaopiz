<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    protected $table = 'passages';

    protected $fillable = [
        'content', 
        'detail', 
    ];

    public function Part6()
    {
        return $this->hasMany('App\Model\Part6', 'passage_id', 'id');
    }

	public function Part7()
    {
        return $this->hasMany('App\Model\Part7', 'passage_id', 'id');
    }

}
