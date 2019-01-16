<?php /* Template Name: Valancers 2 */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			
			
					
			<div class="all-portfolio-content">
			<div class="row work-content">
				
				<div class="five portfolio-description">
					<div class="portfolio-heading-left">				
					
						<h1><?php the_field('heading_of_service_1'); ?></h1>

					</div>							
							
							<p><?php the_field('description_of_service_1'); ?></p>
 
 							
							
					
				</div>
				
				<div class="seven portfolio-image">
				<div class="slider">
				
				<figure>
					
					<img src=<?php the_field('figure_for_service_1'); ?>; class ="landscape" />
					
					
				</figure>

				
				
				</div>
			</div>
	

		</div>
				<div class="row work-content-top">
				
	
						<div class="five image-description">
						<div class="portfolio-heading-right">

							<h1><?php the_field('heading_of_service_2'); ?></h1>
							
						</div>
						
							
							<p><?php the_field('description_of_service_2'); ?></p>
							
							
						</div>
						<div class="seven image">
							<img src=<?php the_field('figure_for_service_2'); ?>; class = "landscape"/>
						</div>
				</div>
		
			<div class="row work-content">
				
				<div class="five portfolio-description">
					<div class="portfolio-heading-left">				
					
						<h1><?php the_field('heading_of_service_3'); ?></h1>

					</div>
					
							
							<p><?php the_field('description_of_service_3'); ?></p>
							
					
				</div>
				<div class="seven portfolio-image">
					<img src=<?php the_field('figure_for_service_3'); ?>; class ="landscape" />
				</div>
			</div>
		</div><!--all service content-->
			
			
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

