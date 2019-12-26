@extends('layout')
@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
                    @foreach($articles as $article)
			<div class="title">
                            <h2><a href='{{url("articles/".$article->id)}}'>{{$article->title}}</a></h2>
				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="{{asset('images/banner.jpg')}}" alt="" class="image image-full" /> </p>
                    @endforeach
		</div>
		
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

@endsection
