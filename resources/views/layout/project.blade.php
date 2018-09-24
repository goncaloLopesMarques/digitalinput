

<div class="container-fluid project-container" style="background-image: url('/images/PortfolioCovers/Supxperiencestore/sea-3652697_1920.jpg')">

	<section class="project-headers">

		<div class="project-title">

			<h1>{{ $project->name }}</h1>

		</div>

		<div class="row project-row">

			<div class="col-md-4">

				<div class="project-thumbnail">

					<img src="{{ Voyager::image( $project->thumbnail ) }}" alt="">


					

				</div>

			</div>

			<div class="col-md-8">

				<div class="project-description">

					{{ $project->description }}

				</div>

			</div>

		</div>




	</section>

	<section class="project-body">
		

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
						preg_match('/\\\([a-zA-Z0-9]+)\.png$/', $pic, $target);						
						$htmlpic .= "<div class='col-md-3'>
									   <div class='project-image'>
									   		
										 	<img src='". Voyager::image($pic) ."' onclick=\"openModal();currentSlide(".$it.")\" alt='".$target[1]."'>
											
									   </div>
									</div>";
						$htmlslides .= "<div class='mySlides'>
  										<div class='numbertext'>".$it." / ".$total."</div>
  											<img src='". Voyager::image($pic) ."' style='width:100%'>
  									</div>";
  						$htmlthumb .= "<div class='column'>
											<img class='demo' src='". Voyager::image($pic) ."' onclick=\"currentSlide(".$it.")\" alt='".$target[1]."'>
								  	    </div>";
					$it++;
				}
				echo $htmlpic;
			}
@endphp
			<!-- The Modal/Lightbox -->
			<div id="myModal" class="modal">
  				<span class="close cursor" onclick="closeModal()">&times;</span>
  					<div class="modal-content">
  
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
<style>

.column {
  padding: 0 8px;
}

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
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
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
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
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
  color: white;
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

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>