@extends('projects.layout')

@section('content')
<h1>Edit Project</h1>
<form method="POST" action="{{url('/projects/'.$project->id)}}" style="margin-bottom: 1em">
            @csrf
            @method('PATCH')
            <div>
                <input type="text" name="title" placeholder="title" value="{{$project->title}}"/>
            </div>
            <div>
                <textarea name="description" placeholder="description">{{$project->description}}</textarea>
            </div>  
            <div>
                <button type="submit">Update Project</button>
            </div>
        </form>
<form method="POST" action="{{url('/projects/'.$project->id)}}">
    {{method_field('DELETE')}}
    {{csrf_field()}}
    <div>
                <button type="submit">Delete Project</button>
            </div>
</form>

@include("projects.errors")
@endsection