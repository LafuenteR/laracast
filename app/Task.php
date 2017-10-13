<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function incomplete(){
    	return Task::where('completd',0)->get();
    }
}
