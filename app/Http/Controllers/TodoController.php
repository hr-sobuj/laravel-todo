<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'task'=>'required',
            'due_date'=>'required'
        ]);

    }
}
