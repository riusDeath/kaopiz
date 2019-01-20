<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Part1;

class Test extends Model
{
    protected $table = 'test';

    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'name', 
        'title',
        'created_at',
        'updated_at',
        'status',
    ];

    public function scopeSearch($query)
    {
        if (empty(request()->search)) {
            return $query;
        } 
            
        return $query->where('name', 'like', '%'.request()->search.'%')->orWhere('id', request()->search);
    }


    public function listMediaPart3()
    {
        return \DB::table('media')
                    ->join('part3', 'part3.media_id', '=', 'media.id')
                    ->groupBy('part3.media_id')
                    ->join('test', 'test.id', '=', 'part3.test_id')
                    ->where('test.id', $this->id)
                    ->get();

    }

    public function listPassagePart6()
    {
        return \DB::table('passages')
                    ->join('part6', 'part6.passage_id', '=', 'passages.id')
                    ->groupBy('part6.passage_id')
                    ->join('test', 'test.id', '=', 'part6.test_id')
                    ->where('test.id', $this->id)
                    ->get();

    }

    public function listPassagePart7()
    {
        return \DB::table('passages')
                    ->join('part7', 'part7.passage_id', '=', 'passages.id')
                    ->groupBy('part7.passage_id')
                    ->join('test', 'test.id', '=', 'part7.test_id')
                    ->where('test.id', $this->id)
                    ->get();

    }

    public function listMediaPart4()
    {
        return \DB::table('media')
                    ->join('part_4', 'part_4.media_id', '=', 'media.id')
                    ->groupBy('part_4.media_id')
                    ->join('test', 'test.id', '=', 'part_4.test_id')
                    ->where('test.id', $this->id)
                    ->get();

    }

    public function part1()
    {
    	return $this->hasMany('App\Model\Part1', 'test_id', 'id');
    }

    public function part6()
    {
        return $this->hasMany('App\Model\Part6', 'test_id', 'id');
    }

	public function part7()
    {
        return $this->hasMany('App\Model\Part7', 'test_id', 'id');
    }

    public function part2()
    {
    	return $this->hasMany('App\Model\Part2', 'test_id', 'id');
    }

   
    public function part3()
    {
        return $this->hasMany('App\Model\Part3', 'test_id', 'id');
    }

    public function part4()
    {
        return $this->hasMany('App\Model\Part4', 'test_id', 'id');
    }

	public function part5()
    {
        return $this->hasMany('App\Model\Part5', 'test_id', 'id');
    }
}
