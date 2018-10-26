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

<div class="container">
  <div class="row">
    <div class = "col-md-12 blogHeaders">

    <h3 class="section-title h1-responsive text-center">
      <b>B</b>log
    </h3>

    </div>
  </div>

  <form class="form-search mb-2" method="GET" action="/blog/search">

    <div class="row mb-4">

      <div class="col-md-8">

        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm d-inline my-3 ml-3 w-75" name="q" type="text" placeholder="Pesquisar" aria-label="Search">

      </div>

      <div class="col-md-4">  

        <button class="btn btn-primary"  type="submit">Pesquisar</button>  

      </div>

    </div>

  </form>

</div>

<div class="row m-0" id="posts">
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