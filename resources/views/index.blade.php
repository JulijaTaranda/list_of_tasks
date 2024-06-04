@extends('layouts.app')

@section('title', 'The list of tasks')
@section('content')
 <div>
     @forelse($tasks as $task)
       <ul>
           <li><a href="{{ route('tasks.show', ['id' => $task ->id])}}">{{ $task->title }}</a></li>
       </ul>
     @empty
     <div>There are no tasks!</div>
     @endforelse
 </div>
 @endsection