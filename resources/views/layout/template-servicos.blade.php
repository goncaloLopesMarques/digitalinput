<section class="white">


	<h1 class="section-title h1-responsive">{{ $template_content->h1 }}</h1>
	<h2 class="section-title h2-responsive">{{ $template_content->h2 }}</h2>



</section>






<!-- SECTION 1 -->
@if ($template_content->section1_h3 or $template_content->section1_content)
<section class="template-section">

	<div class="container">

		<div class="row">


			@if ($template_content->section1_h3)
				<h3 class="h3-responsive simple">{{ $template_content->section1_h3 }}</h3>
			@endif


			@if ($template_content->section1_content)
				<div class="section-1">

					
					{!! $template_content->section1_content !!}


				</div>
			@endif


		</div>

	</div>

</section>
@endif



<!-- GRID -->
@if ($template_content->num_colunas_grid > 0)
<section class="template-section py-5">

      <div class="container">
      
         <div class="row row-eq-height">

         
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
@endif
<!-- FIM GRID -->


<!-- SECTION 2 -->
@if ($template_content->section2_h3 or $template_content->section2_content)
<section class="template-section">

	<div class="container">

		<div class="row">


			@if ($template_content->section2_h3)
			<h3 class="h3-responsive simple">{{ $template_content->section2_h3 }}</h3>
			@endif


			@if ($template_content->section2_content)
			<div class="section-2">

				
				{!! $template_content->section2_content !!}


			</div>
			@endif


		</div>

	</div>

</section>
@endif


<!-- FIM SECTION 2 -->