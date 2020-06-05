<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable =[
		'title','description','status','user_id','views_count','like_count'
	];
}
