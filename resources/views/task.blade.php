@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="text-center">Todo List</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
            <tr>
                <td>{{$task->date}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>          
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="3">No tasks listed!</td>
            </tr>
            @endforelse
        </tbody>
    </table>

<a href="/task/create" class="btn btn-primary">Create task</a>

</div>
@endsection