<!doctype html>
<html >
    <head>
        <title>Projects</title>
    </head>
    <body>
        
        <h1>Projects</h1>
        <ul>
            @foreach($projects as $project)
            <li><a href="{{url('/projects/'.$project->id)}}">{{$project->title}}</a></li>
            @endforeach
        </ul>
    </body>
</html>
