


<script>



  $(document).ready(function(){ 


    // estilo dos botões
    $("section.template-section a").addClass("btn btn-elegant waves-effect waves-light btn-template");
    $("div.template-grid a").addClass("btn btn-elegant waves-effect waves-light");



    var boostrap_class_section_1 = <?php echo json_encode($template_content->boostrap_class_section_1); ?>;
    var boostrap_class_section_2 = <?php echo json_encode($template_content->boostrap_class_section_2); ?>;


    // table responsive
    $("div.section-1 td").addClass(boostrap_class_section_1);
    $("div.section-2 td").addClass(boostrap_class_section_2);

    $("div td.template-section img, section.template-section img").addClass("template-img jarallax-img lazyload blur-up");




    $("img.template-img" ).wrap( "<div id='jarallax-container-1' style='position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;'></div>" );





    $("div#jarallax-container-1" ).wrap( "<div class='jarallax'></div>" );



            

  });






  // DEBUG
  var template_content = <?php echo json_encode($template_content); ?>;         
  console.log(template_content);


   

        $(document).ready(function(){  

          $('.jarallax').jarallax({
            speed: 0.2,
            imgSize: 'contain'
          });

        });

   





</script>






<style>

/* T E M P L A T E  SERVIÇOS */


.card.card-cascade .view.view-cascade.gradient-card-header {
    padding: 1.6rem 1rem;
    text-align: center;}

    .view.view-cascade {
    -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
    -webkit-border-radius: .25rem;
    border-radius: .25rem;}

     .card.card-cascade{
      box-shadow:none;
     }

    .card.card-cascade .view.view-cascade.gradient-card-header .card-header-title {
    font-weight: 500;
    font-size: 3vh;
}

.card.card-cascade .view.view-cascade.gradient-card-header{
color: #fff!important;
}



section.template-section{

    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    border-radius: 0.125rem;
    margin: 5vh 2vw;
    padding: 2vh 1vw;

    background-image: linear-gradient(-90deg, #fdfbfb 0%, #dddfe0 100%);

    border: 1px solid #bbb;



}

  div.section-1 table, div.section-2 table{

    width:100%!important;
  } 

  section.template-section tr{

    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    
  }


  section td.template-section{
    width: unset!important;

    
  }

  section td.template-section > img.template-img.jarallax-img{

     /*float:right;*/
     padding-left: 1.5vw;
     padding-bottom: 1.5vh;

     

     object-fit: contain!important; 
     object-position: 50% 50%; 
     max-width: none; 
     position: fixed; top: 0px; 
     left: 0px; 
     width: 651px; 
     height: 744.5px; 
     overflow: hidden; 
     pointer-events: none; 
     margin-top: 72.25px; 
     transform: translate3d(0px, -24.75px, 0px);
  }


  a.btn-template{
    margin: 0px 15px;
  }



#jarallax-container-1 {
  /*
    clip: rect(0 651px 600px 0);
    clip: rect(0, 651px, 600px, 0);
  */
}



.jarallax {
    position: relative;
    z-index: 0;
    height: 400px;
    width: 400px;
    float: right;
    margin: 1vh 15px 1vh 1vh;
    clear: right;
}

.jarallax > .jarallax-img {
    position: absolute;
    object-fit: cover;
    /* support for plugin https://github.com/bfred-it/object-fit-images */
    font-family: 'object-fit: cover;';
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}



</style>









