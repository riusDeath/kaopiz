<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Grammar_guides extends Model
{
	protected $table = 'grammar_guides';

    protected $fillable = [
        'title', 
        'content', 
    ];
    
}
