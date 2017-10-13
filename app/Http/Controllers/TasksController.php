<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    function index(){
    	$tasks = Task::all();
    	return view('welcome',compact('tasks'));
    }
    function show($id){
    	$task = Task::find($id);
		return view('about',compact('task'));
    }
}
