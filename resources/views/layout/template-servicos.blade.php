<section class="white">


	<h1 class="section-title h1-responsive">{{ $template_content->h1 }}</h1>
	<h2 class="section-title h2-responsive">{{ $template_content->h2 }}</h2>



</section>






<!-- SECTION 1 -->
<section class="template-section">

	<div class="container">

		<div class="row">

			<h3 class="h3-responsive simple">{{ $template_content->section1_h3 }}</h3>


			<div class="section-1">

				
				{!! $template_content->section1_content !!}


			</div>

			{{--
 			<div class="col-md-12 call-to-action">
				<a type="button" class="btn btn-elegant">Informações</a><a href="/portfolio" class="btn btn-elegant">Orçamento</a>
			</div> 
			--}}

		</div>

	</div>

</section>
{{--

<div class="jarallax">



 <div class="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">

	<img title="Image Title" src="http://digitalinput/storage/templatepaginas/October2018/consultoria-em-marketing.jpg" alt="Image description" width="300" height="300" class="template-img jarallax-img" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 202.453px; width: 1498px; height: 306.4px; overflow: hidden; pointer-events: none; margin-top: 38.3px; transform: translate3d(0px, -19px, 0px);">

</div>

</div>
 --}}


<!-- GRID -->
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
<!-- FIM GRID -->


<!-- SECTION 2 -->
<section class="template-section">

	<div class="container">

		<div class="row">

			<h3 class="h3-responsive simple">{{ $template_content->section2_h3 }}</h3>


			<div class="section-2">

				
				{!! $template_content->section2_content !!}


			</div>

			{{--
			<div class="col-md-12 call-to-action">
				<a type="button" class="btn btn-elegant">Informações</a><a href="/portfolio" class="btn btn-elegant">Orçamento</a>
			</div> 
			--}}

		</div>

	</div>

</section>
<!-- FIM SECTION 2 -->