

<div class="container-fluid project-container">

	<div class="project-title">

		<h1>{{$project->name}}</h1>

	</div>

	<div class="row project-row">

		<div class="col-md-4">

			<div class="project-thumbnail">

				<img src="{{ $project->thumbnail }}" alt="">

			</div>

		</div>

		<div class="col-md-8">

			<div class="project-description">

				{{ $project->description }}

			</div>

		</div>

	</div>

	




</div>