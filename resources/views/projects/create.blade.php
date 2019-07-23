<!doctype html>
<html >
    <head>
        <title>Projects</title>
    </head>
    <body>
        
        <h1>Create a  new Project</h1>
        
        <form method="POST" action="{{url('/projects')}}">
            @csrf
            <div>
                <input type="text" name="title"  placeholder="title" value="{{old('title')}}"/>
            </div>
            <div>
                <textarea name="description" placeholder="description">{{old('description')}}</textarea>
            </div>  
            <div>
                <button type="submit">Create a Project</button>
            </div>
        @include('projects.errors')
        </form>
        
    </body>
</html>
