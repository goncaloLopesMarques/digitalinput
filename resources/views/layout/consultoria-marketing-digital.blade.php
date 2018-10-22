<script>

            var template_content = <?php echo json_encode($template_content); ?>;
            
            console.log(template_content);

</script>



<section class="white">


	<h1 class="section-title h1-responsive">{{ $template_content->h1 }}</h1>
	<h2 class="section-title h2-responsive">{{ $template_content->h2 }}</h2>



</section>



<!-- SECTION 1 -->
<section class="pages-content template-section">

	<div class="container">

		<div class="row">

			<h3 class="h3-responsive simple">{{ $template_content->section1_h3 }}</h3>


			<div class="section-1">

				
				{!! $template_content->section1_col1_content !!}


			</div>

			{{--
			<div>
	
				{!! $template_content->section1_col2_content !!}

			</div> 
			--}}


			<div class="col-md-12 call-to-action">
				<a type="button" class="btn btn-elegant">Informações</a><a href="/portfolio" class="btn btn-elegant">Orçamento</a>
			</div>
		</div>

	</div>

</section>



<!-- GRID -->
<section class="py-5 cloudy-knoxville-gradient">

      <div class="container">
      
         <div class="row m-0 row-eq-height">


			{{--          	
			@php
         		
         		echo $mostrar_coluna_1;
         		echo $boostrap_class;

         	@endphp 
         	--}}

         
          <!--Panel-->
           	@if ($template_content->mostrar_coluna_1)

           		 <div class="{{ $template_content->boostrap_class_grid }}">

			  
			        <div class="card card-cascade">

			          <!-- Card image -->
			          <div class="view view-cascade gradient-card-header blue-gradient">

			            <!-- Title -->
			            <h3 class="card-header-title mb-3">{{ $template_content->grid_coluna_1_h3 }}</h3>


			          </div>

			          <!-- Card content -->
			          <div class="card-body card-body-cascade text-center my-vertical-align">

			            {!! $template_content->grid_coluna_1_content !!}

			          </div>

			        </div>


      			</div>


        
    		@endif
          <!--/.Panel-->

                    <!--Panel-->
           	@if ($template_content->mostrar_coluna_2)

           		 <div class="{{ $template_content->boostrap_class_grid }}">

			  
			        <div class="card card-cascade">

			          <!-- Card image -->
			          <div class="view view-cascade gradient-card-header blue-gradient">

			            <!-- Title -->
			            <h3 class="card-header-title mb-3">{{ $template_content->grid_coluna_2_h3 }}</h3>


			          </div>

			          <!-- Card content -->
			          <div class="card-body card-body-cascade text-center my-vertical-align">

			            {!! $template_content->grid_coluna_2_content !!}

			          </div>

			        </div>


      			</div>


        
    		@endif
          <!--/.Panel-->

                    <!--Panel-->
           	@if ($template_content->mostrar_coluna_3)

           		 <div class="{{ $template_content->boostrap_class_grid }}">

			  
			        <div class="card card-cascade">

			          <!-- Card image -->
			          <div class="view view-cascade gradient-card-header blue-gradient">

			            <!-- Title -->
			            <h3 class="card-header-title mb-3">{{ $template_content->grid_coluna_3_h3 }}</h3>


			          </div>

			          <!-- Card content -->
			          <div class="card-body card-body-cascade text-center my-vertical-align">

			            {!! $template_content->grid_coluna_3_content !!}


			          </div>

			        </div>


      			</div>


        
    		@endif
          <!--/.Panel-->

                    <!--Panel-->
           	@if ($template_content->mostrar_coluna_4)

           		 <div class="{{ $template_content->boostrap_class_grid }}">

			  
			        <div class="card card-cascade">

			          <!-- Card image -->
			          <div class="view view-cascade gradient-card-header blue-gradient">

			            <!-- Title -->
			            <h3 class="card-header-title mb-3">{{ $template_content->grid_coluna_4_h3 }}</h3>


			          </div>

			          <!-- Card content -->
			          <div class="card-body card-body-cascade text-center my-vertical-align">

			            {!! $template_content->grid_coluna_4_content !!}


			          </div>

			        </div>


      			</div>

    		@endif
                 
   
          <!--/.Panel-->

       </div>
    </div>

</section>
<!-- FIM GRID -->


<!-- SECTION 2 -->
<section class="pages-content">

	<div class="container">

		<div class="row">

			<h3 class="h3-responsive simple">{{ $template_content->section2_h3 }}</h3>


			<div class="section-2">

				
				{!! $template_content->section2_col1_content !!}


			</div>

			{{-- 
			<div class="col-sm-12 col-lg-4">

				
				{!! $template_content->section2_col2_content !!}

			</div> 
			--}}





			<div class="col-md-12 call-to-action">
				<a type="button" class="btn btn-elegant">Informações</a><a href="/portfolio" class="btn btn-elegant">Orçamento</a>
			</div>
		</div>

	</div>

</section>
<!-- FIM SECTION 2 -->