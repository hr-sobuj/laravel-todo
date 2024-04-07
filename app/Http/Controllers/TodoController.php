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

    public function destroy($id){
        $todo=todos::find($id)->destroy($id);
        return redirect(route('todo.home'));
    }

    public function edit($id){
        $todo=todos::find($id);
        return view('update')->with(compact('todo'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'task'=>'required',
            'due_date'=>'required'
        ]);
        $id=$request['id'];
        $todo=todos::find($id);
        $todo->name=$request['name'];
        $todo->task=$request['task'];
        $todo->due_date=$request['due_date'];

        $todo->save();

        return redirect(route('todo.home'));
    }
}
