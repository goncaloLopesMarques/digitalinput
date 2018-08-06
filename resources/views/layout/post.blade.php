<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">

    <meta name="keywords" content="{{ $post->meta_keywords }}">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>{{ $category->name }}</h2>
				<h1>{{ $post->title }}</h1>				
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<h5><img src="{{ Voyager::image($avatar->avatar) }}" style="height:50px;width:50px;">criado por {{ $post->author }} a {{ $data }}</h5>
				<p>{!! $post->body !!}</p>			 
			</div>
		</div>
	</div>
</body>
</html>