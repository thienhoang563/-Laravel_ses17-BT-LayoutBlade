<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $task = array([
            'Cat'=>'Con mèo',
            'Dog'=>'Con chó',
        ]);

        return view('tasks.list',compact('task'));

    }
}
