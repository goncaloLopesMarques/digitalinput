<script>



  $(document).ready(function(){ 


    // estilo dos botões
    $("section.template-section a").addClass("btn btn-elegant waves-effect waves-light");
    $("div.template-grid a").addClass("btn btn-elegant waves-effect waves-light");



    var boostrap_class_section_1 = <?php echo json_encode($template_content->boostrap_class_section_1); ?>;


    // table responsive
    $("section.template-section td").addClass(boostrap_class_section_1);

  });



</script>




<style>

  section.template-section table{

    width:100%!important;
  } 

  section.template-section tr{

    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }


  section.template-section td{
    width: unset!important;
  }

</style>









