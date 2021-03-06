<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
    public static function archives(){
    	return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')->groupBy('year','month')->orderByRaw('min(created_at) desc')->get()->toArray();
    }
}
