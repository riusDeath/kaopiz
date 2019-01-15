<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    protected $fillable = [
        'content', 
    ];

    public function part1()
    {
    	$this->hasMany('App\Model\Part1', 'level_id', 'id');
    }

    public function Part6()
    {
        $this->hasMany('App\Model\Part6', 'level_id', 'id');
    }

	public function Part7()
    {
        $this->hasMany('App\Model\Part7', 'level_id', 'id');
    }

    public function part2()
    {
    	$this->hasMany('App\Model\Part2', 'level_id', 'id');
    }

    public function Part34()
    {
        $this->hasMany('App\Model\Part34', 'level_id', 'id');
    }

	public function Part5()
    {
        $this->hasMany('App\Model\Part5', 'level_id', 'id');
    }
}
