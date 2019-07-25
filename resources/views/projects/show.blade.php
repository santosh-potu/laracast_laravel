@extends('projects.layout')

@section('content')
<h1 class='title'>{{$project->title}}</h1>
<div class='content'>{{$project->description}}</div>

<p>
    <a href="{{url('/projects/'.$project->id.'/edit')}}">Edit</a>
</p>

@if($project->tasks->count())
<div>
    @foreach($project->tasks as $task)
    <form method="POST" action="{{url('/completed-tasks/'.$task->id)}}">
        @if($task->completed)
        @method('DELETE')
        @endif
        @csrf
        <label for="completed" {{$task->completed?'style=text-decoration:line-through':''}}>
        <input type="checkbox" name="completed" onchange='this.form.submit();'
                {{$task->completed?'checked':''}} />
         {{$task->description}}
        </label>
    </form>
    
    @endforeach
    
    <form method="POST" action="{{url('/projects/'.$project->id.'/tasks')}}">
        <div>
        @csrf
        <div><strong>
        <label for="description" >New Task</label>
            </strong></div>
        <div><input type="textbox" name="description" 
               placeholder="NewTask description" value="{{old('description')}}"/>
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
        </div>
    </form>
    
    @include('projects.errors')
    
</div>
@endif

@endsection