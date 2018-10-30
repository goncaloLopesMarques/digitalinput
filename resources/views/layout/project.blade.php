

<div class="container-fluid project-container">

	<section class="project-headers">

		<div class="row project-row">

			<div class="flex-center col-md-4">

				<div class="project-thumbnail">

					<img data-src="{{ Voyager::image( $project->thumbnail ) }}" class="lazyload blur-up" alt="">

				</div>

			</div>

			<div class="col-md-8">

				<div class="project-description">


          <h1 class="">{{ $project->name }}</h1>

					{!! $project->description !!}

				</div>

			</div>

		</div>

	</section>

	<section class="project-body">

		<h3 class="text-center margin-bb">Galeria de Imagens</h3>

		<div class="row" id="gallery-project">

@php
			$imagens = json_decode($project->images);					
		    $htmlpic = "";
		    $htmlslides = "";
			  $htmlthumb = "";
		    if ($imagens){
		    	$total = count($imagens);
		    	$it = 1;
				foreach($imagens as $pic)
				{
					preg_match('/\\\([a-zA-Z0-9_&]+)\.png$/', $pic, $target);						
					$htmlpic .= "<div class='my-col-xxl-3 col-lg-3 col-md-4 col-xs-12 p-0 blogGrid'>
								   <div class='project-image flex-center waves-effect waves-light view overlay zoom'>
									   		
									 	<img data-src='". Voyager::image($pic) ."' class='lazyload blur-up cursor' alt='".$target[1]."'>										 

									 	<div class='mask rgba-black-stronger flex-center' onclick=\"openModal();currentSlide(".$it.")\">
									 		<p class='white-text text-center'> 
										 			".$target[1]."
									 		</p>
									 	</div>
											
								   </div>
								</div>";
						$htmlslides .= "<div class='mySlides'>
  										<div class='numbertext'>".$it." / ".$total."</div>
  											<img data-src='". Voyager::image($pic) ."' class='lazyload blur-up' style='width:100%'>
  									</div>";
  						$htmlthumb .= "<div class='column'>
											<img  data-src='". Voyager::image($pic) ."' class='lazyload blur-up demo cursor' onclick=\"currentSlide(".$it.")\" alt='".$target[1]."'>
								  	    </div>";
					$it++;
				}
				echo $htmlpic;
			}
@endphp
			<!-- The Modal/Lightbox -->
			<div id="myModal" class="modal">
  				<span class="close cursor" onclick="closeModal()">&times;</span>
  					<div class="modal-content-port">
  
  						@php echo $htmlslides; @endphp

						<!-- Next/previous controls -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>

						<!-- Caption text -->
						<div class="caption-container">
							<p id="caption"></p>
						</div>

						@php echo $htmlthumb; @endphp

  					</div>
  			</div>

		</div>

	</section>

</div>

<div class="unique-color py-2"></div>

<style>

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 99999999999;
  padding-top: 50px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,.95);
}

/* Modal Content */
.modal-content-port {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
  opacity: 1;
}

.close:hover,
.close:focus {
  color: #999 !important;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}
.mySlides img{
	max-height: 500px;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: #000 !important;
  background-color: rgba(0, 0, 0, 0.4);
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: #fff !important;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

p#caption{
	margin-top: 1rem;
}

.margin-bb {
    margin-bottom: 5%;
}

img.demo {
  opacity: 0.6;
  width: 100%;
}

img.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.cursor {
    cursor: pointer;
}

</style>