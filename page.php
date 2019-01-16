<?php get_header(); ?>

<div class="row">
				<section class="hero">
				<div class="opaque">
					<section class="tagline">
						
						<div style = "background-image: url('<?php the_field('slide1_pic'); ?>');" class = "hero" no-repeat center center/>

						        <div class="type-wrap">
						            <span id="typed"></span>
						        </div>
						        <ul>
							       <li><?php the_field('slide_quote'); ?></li>
							     </ul>
							      <ul class="reverse-buttons">

							       <li><a href="<?php the_field('slide_1_button'); ?>" class="reverse-button smoothScroll hvr-shutter-out-horizontal-reverse">Read More</a></li>
							    </ul>

					</section>
				</div><!--opaque-->
				</section>

		</div>

<a id ="rationale"></a>

	<div class="homepage">
		<div class="panel">
			<div class="clever-wrap">
			<section class="left clever-box">
				<div class="rationale">
					<div class="rationale-heading-middle">
						<h1><?php the_field('service_lebel_left'); ?></h1>
					</div>
						<?php the_field('service_description_left'); ?>
					<div class="buttons">
						<a class="button hvr-shutter-out-horizontal" href="<?php the_field('service_button_left'); ?>">Learn More</a>
					</div> 
			</div>
			</section>
			<section class="clever-box middle">
			<div class="rationale">

					<div class="rationale-heading-left">
						

						<h1 class="column"><?php the_field('service_lebel_mid');?></h1> 
					</div>
						<?php the_field('service_description_mid'); ?>
				<div class="buttons">
					<a class="button hvr-shutter-out-horizontal" href="<?php the_field('service_button_middle'); ?>">Learn More</a>
				</div>
		</div>	
	</section>
		<section class="clever-box clever-box-last">
			<div class="rationale">

				<div class="rationale-heading-right">
					
					<h1><?php the_field('service_lebel_right');?></h1>
				</div>
						<?php the_field('service_description_right'); ?>
					<div class="buttons">
						<a class="button hvr-shutter-out-horizontal" href="<?php the_field('service_button_right'); ?>">Learn More</a>
					</div>
			</div>
		</section>
	</div><!--clever wrap close-->
	</div><!--panel-->

		<div id="cbp-qtrotator" class="cbp-qtrotator">
	<div class="cbp-qtcontent current">
		<div class="row quote-panel-1">
			<section class="vertical-center">
			<div class="four">
				<h1>
					<?php the_field('slider_1_title'); ?>
				</h1>
				
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="<?php the_field('slider_1_button'); ?>">Explore</a>
			</div>
			<div class="eight">
				<blockquote>
					<h2><?php the_field('slider_1_quote'); ?></h2>
				</blockquote>
				</div>
				
			</section>
		</div>
	</div>
	<div class="cbp-qtcontent">
		<div class="row quote-panel-2">
			<section class="vertical-center">
			<div class="four">
				<?php the_field('slider_1_title'); ?>
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="<?php the_field('slider_1_button'); ?>">Explore</a>
			</div>
			<div class="eight">
				<blockquote>
				<h2><?php the_field('slider_1_quote'); ?></h2>
				</blockquote>
				</div>
				
			</section>
		</div>
	</div>
		<div class="cbp-qtcontent">
		<div class="row quote-panel-3">
			<section class="vertical-center">
			<div class="four">
				<?php the_field('slider_1_title'); ?>
				
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="<?php the_field('slider_1_button'); ?>">Explore</a>
			</div>
			<div class="eight">
				<blockquote>
					<h2><?php the_field('slider_1_quote'); ?></h2>
				</blockquote>
				</div>
				
			</section>
		</div>
	</div>
		<span class="cbp-qtprogress"></span>
	</div>
		
			<div class="row bottom-panel">
		<section class="row vertical-center">
			<h1><?php the_field('quote_header_3'); ?></h1>
			<h2><?php the_field('quote_para_3'); ?></h2>
			<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="<?php the_field('button_for_slider_3'); ?>">Get Started</a>
		</section>
	</div>
		

<?php get_sidebar(); ?>

<?php get_footer(); ?>
