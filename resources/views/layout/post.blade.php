

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $category->name }}</h2>
			<h1>{{ $post->title }}</h1>						
			<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
			<h5>criado por <img src="{{ Voyager::image( $avatar->avatar ) }}" style="width:50px"> {{ $post->author->name }} a {{ $data }}</h5>
			<p>{!! $post->body !!}</p>
		</div>
	</div>
</div>