<section class="portfolio-headers parallax" id="portfolio-background">

		<h1>Portfólio</h1>

	</section>

	<div class="container portfolio-content">

		<div class="row">
			<div class="col-lg-12 port-filter-bar">
				<div class="portfolioFilter clearfix">
					
					<a href="#" data-filter="*" class="current">Todas as Categorias</a>
					@foreach($categories as $categ)

						<?php echo "<a href='#' data-filter='.".str_replace(' ', '', $categ->name)."'>".$categ->name."</a>"; ?>
		
					@endforeach

				</div>
			</div>
			<div class="portfolioContainer">

				@foreach($projetos as $project)

					<?php $cat_names = "";
					foreach($project->portfolio_categories as $cat){
						$cat_names .= str_replace(' ', '', $cat->name)." ";
					}
					 echo "<div class='".$cat_names."'>
					<img src='".$project->thumbnail."' alt='image'>
				</div>"; ?>

				@endforeach
								
			</div>
		</div>

</div>