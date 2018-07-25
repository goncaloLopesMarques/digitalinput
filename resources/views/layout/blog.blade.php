<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators"></ol>
   <div class="carousel-inner">
   </div>
</div>
<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<div class="row">
<div class = "col-md-8 blogHeaders">
<h1>Blog</h1>
</div>
</div>


<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-6">
@foreach($posts as $post)
			<div>
				<a href="/blog/{{ $post->slug }}">
         <span class="postTitle"><span style="color: black">{{ $post->id }}.</span>&nbsp;{{ $post->title }}</span>
         </a>
					<img class="recentImages" src="{{ Voyager::image( $post->image ) }}" style="width:100%">

          <span class="postAuthor"> Criado por {{ $post->author }} </span>
          <p>
          <a href="/blog/{{ $post->slug }}">
          <span class="postSubtitle">{{ $post->excerpt }}</span>
          <p>
         
          <span class="postKeepReading">Continuar a ler >></span>
          </a>
			<hr>
			</div>
		@endforeach
</div>
<div class="col-md-3 blogHeaders recent">
<div class="card">
<h4>Pesquisar</h4>
<div class="card-body">
<form class="form-inline" method="GET" action="/blog/search">
    <i class="fa fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" name="q" type="text" placeholder="Search" aria-label="Search">

<div class="container">
    <div class="row">
        <div class="col-md-12"><div class="col-md-9"><a href="#" class="btn btn-primary" type="submit">Pesquisar</a></div></div>
        </form>
        <div class="row">
        <div class="col-md-5">Search by:</div>
        <div class="col-md-7"> <img src="images/algolia.png" style="max-height: 100%;max-width: 100%;"> </div>
        </div>
    </div>
</div>
</div>
</div>

<h2 class="blogHeaders">Posts mais recentes</h2>
		@foreach($mostRecentPosts as $post)
			<div>
				<a href="/blog/{{ $post['slug'] }}">
					<img class="recentImages" src="{{ Voyager::image( $post['image'] ) }}" style="width:100%">
					<span>{{ $post['title'] }}</span>
          <p>
          <span>{{ $post['excerpt'] }}</span>
				</a>
			</div>
		@endforeach
    <h2 class="blogHeaders">Categorias</h2>
   <!-- Default form subscription -->
<form class="text-center border border-light p-5">

<p class="h4 mb-4">Subscreva</p>

<p>Join our mailing list. We write rarely, but only the best content.</p>

<p>
    <a href="" target="_blank">See the last newsletter</a>
</p>

<!-- Name -->
<input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">

<!-- Email -->
<input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Sign in button -->
<button class="btn btn-info btn-block" type="submit">Subscreva</button>


</form>
<!-- Default form subscription -->
		</div>
    <div class="col-md-2">
    </div>
    </div>
<style>
   .full-screen {
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   }
   .blogHeaders {
    text-align: -webkit-center;
    padding-top: 10px;
    padding-bottom: 10px;
   }
   .paragraph{
      padding-bottom: 20px;
      padding-top: 20px;
   }
   .recentImages{
     padding-top: 15px;
   }
   .postTitle{
    color: #0069aa;
    font-size: 35px;
   }
   .postAuthor{
    color: black;
    font-size: 15px;
   }
   .postSubtitle{
    color: #5d6059;
    font-size: 30px;
   }
   .postKeepReading{
    color: blue;
    font-size: 10px;
   }
   .postText{
    color: black;
    font-size: 25px;
   }
</style>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script>

   $(document).ready(function(){  
       
       var dataArray = <?php echo json_encode($posts); ?>;

     for(var i=0 ; i< dataArray.length ; i++) {
       $('<div class="carousel-item"><img class="d-block w-100" src="storage/'+dataArray[i]["image"]+'"><div class="carousel-caption d-none d-md-block"><a href="/blog/'+dataArray[i]["slug"]+'">'+dataArray[i]["title"]+'</a><p>'+dataArray[i]["excerpt"]+'</p></div></div>').appendTo('.carousel-inner');
       $('<li data-target="#carousel-example-generic" data-slide-to="'+i+'"></li>').appendTo('.carousel-indicators')
   
     }
     $('.carousel-item').first().addClass('active');
     $('.carousel-indicators > li').first().addClass('active');
     $('#carousel-example-generic').carousel();
     var $item = $('.carousel-item');
   var $wHeight = $(window).height();
   
   $item.height($wHeight);
   $item.addClass('full-screen');
   
   $('.carousel img').each(function() {
     var $src = $(this).attr('src');
     var $color = $(this).attr('data-color');
     $(this).parent().css({
       'background-image' : 'url(' + $src + ')',
       'background-color' : $color
     });
     $(this).remove();
   });
   
   $(window).on('resize', function (){
     $wHeight = $(window).height();
     $item.height($wHeight);
   });
   });
   
</script>