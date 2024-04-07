@extends('layouts.main')
@push('title')
    <title>Todo App - Update</title>
@endpush

@section('button')
    <a href="{{ route('todo.home') }}" class="bg-blue-500 px-4 py-2 text-white rounded hover:bg-blue-600">Back</a>
@endsection


@section('main')
    <div class="p-6">
        <div class="mb-6">
            <form action="{{ route('todo.update') }}" method="POST">
                @csrf
                <div class="flex mb-4">
                    <div class="w-1/2 mr-2">
                        <label for="name" class="block text-sm font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name"
                               class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Enter name"
                               value="{{ $todo->name }}">
                        @error('name')
                        <p class="text-red-500 font-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-1/2 ml-2">
                        <label for="task" class="block text-sm font-semibold mb-2">Task</label>
                        <input type="text" id="task" name="task"
                               class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Enter task"
                               value="{{ $todo->task }}">
                        @error('task')
                        <p class="text-red-500 font-bold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="due_date" class="block text-sm font-semibold mb-2">Due Date</label>
                    <input type="date" id="due_date" name="due_date"
                           class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Select due date"
                           value="{{ $todo->due_date }}">
                    @error('due_date')
                    <p class="text-red-500 font-bold">{{ $message }}</p>
                    @enderror
                </div>
                <input type="hidden" name="id" value="{{$todo->id}}">
                <div>
                    <button type="submit" class="bg-green-500 px-4 py-2 text-white rounded hover:bg-green-600">Add
                        Todo</button>
                </div>
            </form>
        </div>


    </div>
@endsection
