@extends('master-page')



@section('head')

    <title>Blog | Digitalinput</title>
    <meta name="description" content="">

    <meta name="keywords" content="">
    @include('layout.head') 
    
@endsection



@section('nav-bar')

    @include('layout.nav-bar')
    
@endsection



@section('main')

    @include('layout.blog')
    
@endsection



@section('footer')

    @include('layout.footer')

@endsection



@section('scripts-css')

    @include('layout.scripts-css')

    <script>
     $(document).ready(function(){  
       
       var dataArray = <?php echo json_encode($posts); ?>;
       var recentArray = <?php echo json_encode($mostRecentPosts); ?>;
       console.log(recentArray);

        //ciclo for para preencher a grid com posts  background:linear-gradient( rgba(0, 0, 0,96), rgba(0, 0, 0,0.6 ) ),url('+dataArray["data"][i]["image"]+');
        for(var i=0 ; i< dataArray["data"].length ; i++){
            
                $("#posts").append('<div class="my-col-xxl-3 col-lg-4 col-md-6 col-xs-12 p-0 blogGrid">   <a href="/blog/'+dataArray["data"][i]["slug"]+'"><div class="flex-center waves-effect waves-light view overlay zoom"><img class="lazyload blur-up" data-src="'+dataArray["data"][i]["image"]+'" alt="zoom"><div class="flex-center titulo-blog-container"><p class="p-1 text-center my-text-shadow-strong">'+dataArray["data"][i]["title"]+'</p></div><div class="my-mask-over mask rgba-black-stronger flex-center waves-effect waves-light"><p class="white-text text-center">'+dataArray["data"][i]["description"]+'</p></div></div></a></div>');
        }

        //ciclo for para preencher o slider
     for(var i=0 ; i< recentArray.length ; i++) { 
       $('<div class="carousel-item"><img class="lazyload blur-up d-block w-100" data-src="'+recentArray[i]["image"]+'"><div class="carousel-caption d-none d-md-block"><a href="/blog/'+recentArray[i]["slug"]+'">'+recentArray[i]["title"]+'</a><p>'+recentArray[i]["description"]+'</p></div></div>').appendTo('.carousel-inner');
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
       var $src = $(this).attr('data-src');
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
    
@endsection


@section('modals')

    @include('layout.modals')
    
@endsection