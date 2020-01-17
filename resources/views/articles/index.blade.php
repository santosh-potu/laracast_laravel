@extends('layout')
@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
                    @forelse($articles as $article)
			<div class="title">
                            <h2><a href='{{route("articles.show",$article)}}'>{{$article->title}}</a></h2>
				<span class="byline">{{$article->excerpt}}</span> </div>
			<p><img src="{{asset('images/banner.jpg')}}" alt="" class="image image-full" /> </p>
                        @empty
                        <p>No relevant Articles yet.</p>
                    @endforelse
		</div>
		
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

@endsection
