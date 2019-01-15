<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

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
