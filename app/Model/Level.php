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
    	return $this->hasMany('App\Model\Part1', 'level_id', 'id');
    }

    public function Part6()
    {
        return $this->hasMany('App\Model\Part6', 'level_id', 'id');
    }

	public function Part7()
    {
        return $this->hasMany('App\Model\Part7', 'level_id', 'id');
    }

    public function part2()
    {
    	return $this->hasMany('App\Model\Part2', 'level_id', 'id');
    }

    public function Part34()
    {
        return $this->hasMany('App\Model\Part34', 'level_id', 'id');
    }

	public function Part5()
    {
        return $this->hasMany('App\Model\Part5', 'level_id', 'id');
    }

    public function listMediaPart3()
    {
        return \DB::table('media')
                    ->select('media.id as id', 'media.mediaFile as mediaFile', 'media.script_answer as script_answer')
                    ->join('part3', 'part3.media_id', '=', 'media.id')
                    ->groupBy('part3.media_id')
                    ->join('levels', 'levels.id', '=', 'part3.level_id')
                    ->where('levels.id', $this->id)
                    ->take(5)
                    ->get();
    }

    public function listMediaPart4()
    {
        return \DB::table('media')
                    ->select('media.id as id', 'media.mediaFile as mediaFile', 'media.script_answer as script_answer')
                    ->join('part_4', 'part_4.media_id', '=', 'media.id')
                    ->groupBy('part_4.media_id')
                    ->join('levels', 'levels.id', '=', 'part_4.level_id')
                    ->where('levels.id', $this->id)
                    ->take(5)
                    ->get();
    }

}
