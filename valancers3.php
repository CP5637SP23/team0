<?php /* Template Name: Valancers 3 */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			
			
					
			<div class="all-portfolio-content">
			<div class="row work-content">
				
				<div class="five portfolio-description">
					<div class="portfolio-heading-left">				
					
						<h1><?php the_field('heading_of_about'); ?></h1>

					</div>							
							
							<p><?php the_field('description_of_about'); ?></p>
 
 							
							
					
				</div>
				
				<div class="seven portfolio-image">
				<div class="slider">
				
				<figure>
					
					<img src=<?php the_field('figure_for_about'); ?>; class ="landscape" />
					
					
				</figure>

				
				
				</div>
			</div>
	

		</div>
				
		
			
		</div><!--all service content-->
			
			
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

