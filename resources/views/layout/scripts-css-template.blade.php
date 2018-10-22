<script>



  $(document).ready(function(){ 


    // estilo dos botões
    $("section.template-section a").addClass("btn btn-elegant waves-effect waves-light");
    $("div.template-grid a").addClass("btn btn-elegant waves-effect waves-light");



    var boostrap_class_section_1 = <?php echo json_encode($template_content->boostrap_class_section_1); ?>;
    var boostrap_class_section_2 = <?php echo json_encode($template_content->boostrap_class_section_2); ?>;


    // table responsive
    $("div.section-1 td").addClass(boostrap_class_section_1);
    $("div.section-2 td").addClass(boostrap_class_section_2);

  });



</script>




<style>

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

  section td.template-section > img{

     float:right;
     padding-left: 1.5vw;
     padding-bottom: 1.5vh;
  }



</style>









