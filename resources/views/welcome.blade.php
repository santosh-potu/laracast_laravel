@extends('layout')

@section('content')
<h1>Home page {{$foo}}</h1>
<ul>
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach
</ul>
@endsection

@section('title','Home')
