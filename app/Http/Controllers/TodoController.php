<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(){
        $todos=todos::all();
        $data=compact('todos');
        return view('welcome')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'task'=>'required',
            'due_date'=>'required'
        ]);
        $todo=new todos();
        $todo->name=$request['name'];
        $todo->task=$request['task'];
        $todo->due_date=$request['due_date'];

        $todo->save();

        return redirect(route('todo.home'));
    }
}
