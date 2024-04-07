@extends('layouts.main')
@push('title')
    <title>Todo App - Home</title>
@endpush

@section('button')
    <a href="{{ route('todo.create') }}" class="bg-blue-500 px-4 py-2 text-white rounded hover:bg-blue-600">Add Todo</a>
@endsection

@section('main')
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">
                            Task
                        </th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">
                            Due Date
                        </th>
                        <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-left text-xs font-semibold uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-200">{{$todo->name}}</td>
                        <td class="px-4 py-2 border-b border-gray-200">{{$todo->task}}</td>
                        <td class="px-4 py-2 border-b border-gray-200">{{$todo->deu_date}}</td>
                        <td class="px-4 py-2 border-b border-gray-200">
                            <button class="bg-blue-500 px-3 py-1 text-white rounded hover:bg-blue-600">Edit</button>
                            <button class="bg-red-500 px-3 py-1 text-white rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@endsection
