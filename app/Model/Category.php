<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'slug', 
        'name', 
        'category_parent'
    ];

    public function scopeCategoryParent()
    {
        return \DB::table('categories')->where('category_parent', '0')->get();
    }

    public function category_child()
    {
        return $this->hasMany('App\Model\Category', 'category_parent', 'id');
    }
}
