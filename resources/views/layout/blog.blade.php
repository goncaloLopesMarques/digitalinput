<!-- CAROUSEL -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators"></ol>
   <div class="carousel-inner darken-overlay">
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
<!-- CAROUSEL -->

<div class="row">
   <div class = "col-md-6 blogHeaders">
      <h1>Blog</h1>
   </div>
    <div class="col-md-6 blogHeaders">
    <div class="row">
        <div class="col-md-8"><form class="form-inline" method="GET" action="/blog/search">
     <i class="fa fa-search" aria-hidden="true"></i>
     <input class="form-control form-control-sm ml-3 w-75" name="q" type="text" placeholder="Search" aria-label="Search"></div>
        <div class="col-md-2">  <button class="btn btn-primary"  type="submit">Pesquisar</button>  </form></div>
        <div class="col-md-2"></div>
        <div class="col-md-2">Search by:</div>
        <div class="col-md-2"><img src="/images/algolia.png" style="max-height: 100%;max-width: 100%;"> </div>
    </div>
    <div class="col-md-6"></div>
    </div>
</div>

<div class="row" id="posts">
   </div>
<style>
  .darken-overlay{
   width: 100%;
   height: 100%;
   background-color: rgba(0, 0, 0, 0.5);
   }
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
       var recentArray = <?php echo json_encode($mostRecentPosts); ?>;
       console.log(recentArray)
        //ciclo for para preencher a grid com posts
        for(var i=0 ; i< dataArray["data"].length ; i++){
            if(i==0){
                $("#posts").append('<div class="col-md-5" id="col5linha1" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col5linha1").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col5linha1").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col5linha1").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col5linha1").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');  
            }else if(i==1){
                $("#posts").append('<div class="col-md-3"id="col3linha1" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col3linha1").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col3linha1").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col3linha1").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col3linha1").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==2){
                $("#posts").append('<div class="col-md-4" id="col4linha1" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col4linha1").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col4linha1").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col4linha1").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col4linha1").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==3){
                $("#posts").append('<div class="col-md-4" id="col4linha2" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col4linha2").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col4linha2").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col4linha2").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col4linha2").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==4){
                $("#posts").append('<div class="col-md-2" id="col2linha2" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col2linha2").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col2linha2").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col2linha2").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col2linha2").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==5){
                $("#posts").append('<div class="col-md-6" id="col6linha2" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col6linha2").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col6linha2").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col6linha2").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col6linha2").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==6){
                $("#posts").append('<div class="col-md-5" id="col5linha3" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col5linha3").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col5linha3").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col5linha3").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col5linha3").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');  
            }else if(i==7){
                $("#posts").append('<div class="col-md-3"id="col3linha3" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col3linha3").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col3linha3").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col3linha3").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col3linha3").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }else if(i==8){
                $("#posts").append('<div class="col-md-4" id="col4linha3" style="background-image: url('+dataArray["data"][i]["image"]+');">');
                $("#col4linha3").append('<a href="/blog/'+dataArray["data"][i]["slug"]+'">');
                $("#col4linha3").append('<span class="postTitle"></span>&nbsp;'+dataArray["data"][i]["title"]+'</span></a>');
                $("#col4linha3").append('<span class="postAuthor"> Criado por '+dataArray["data"][i]["author"]+' </span>');
                $("#col4linha3").append('<p><a href="/blog/'+dataArray["data"][i]["slug"]+'"><span class="postSubtitle">'+dataArray["data"][i]["excerpt"]+'</span><p><span class="postKeepReading">Continuar a ler >></span></a></div>');
            }
       }
        //ciclo for para preencher o slider
     for(var i=0 ; i< recentArray.length ; i++) { 
       $('<div class="carousel-item"><img class="d-block w-100" src="'+recentArray[i]["image"]+'"><div class="carousel-caption d-none d-md-block"><a href="/blog/'+recentArray[i]["slug"]+'">'+recentArray[i]["title"]+'</a><p>'+recentArray[i]["excerpt"]+'</p></div></div>').appendTo('.carousel-inner');
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