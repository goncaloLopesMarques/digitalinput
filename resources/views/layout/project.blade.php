

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
		



	</section>

</div>