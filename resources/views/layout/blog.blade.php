<!-- CAROUSEL -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators"></ol>
   <div class="carousel-inner darken-overlay">
  

 <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>
</div>
<!-- CAROUSEL -->

<div class="row">
   <div class = "col-md-6 blogHeaders">



    <h3 class="section-title h1-responsive ml-5 mt-5 pl-5 pt-5">
      <b>B</b>log
    </h3>


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


<script>

defer(function () {
    

    $(document).ready(function(){  
       
       var dataArray = <?php echo json_encode($posts); ?>;
       var recentArray = <?php echo json_encode($mostRecentPosts); ?>;
       console.log(recentArray);

        //ciclo for para preencher a grid com posts  background:linear-gradient( rgba(0, 0, 0,96), rgba(0, 0, 0,0.6 ) ),url('+dataArray["data"][i]["image"]+');
        for(var i=0 ; i< dataArray["data"].length ; i++){
            
                $("#posts").append('<div class="my-col-xxl-3 col-lg-4 col-md-6 col-xs-12 p-0 blogGrid">   <div class="flex-center waves-effect waves-light view overlay zoom"> <a href="/blog/'+dataArray["data"][i]["slug"]+'">  <img src="'+dataArray["data"][i]["image"]+'" alt="zoom"><div class="flex-center titulo-blog-container">   <p class="p-1 text-center my-text-shadow-strong">'+dataArray["data"][i]["title"]+'</p>   </div>   <div class="my-mask-over mask rgba-black-stronger flex-center waves-effect waves-light"><p class="white-text text-center">'+dataArray["data"][i]["excerpt"]+'</p></div></a></div></div>');
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


});
 
</script>