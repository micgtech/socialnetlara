<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{	
	// protected $table = ['articles'];
    protected $fillable = [
        'content', 'post_on' ,'live', 'user_id',
    ];
}
