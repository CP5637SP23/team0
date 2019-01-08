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

							       <li><a href="https://theme.valancers.com/about/" class="reverse-button smoothScroll hvr-shutter-out-horizontal-reverse">Read More</a></li>
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
						<?php the_field('virtual_assistant'); ?>
					<div class="buttons">
						<a class="button hvr-shutter-out-horizontal" href="hire.html">Contact Me</a>
					</div> 
			</div>
			</section>
			<section class="clever-box middle">
			<div class="rationale">

					<div class="rationale-heading-left">
						

						<h1 class="column"><?php the_field('service_lebel_mid');?></h1> 
					</div>
						<?php the_field('web_design_&_developments'); ?>
				<div class="buttons">
					<a class="button hvr-shutter-out-horizontal" href="work.html">See My Work</a>
				</div>
		</div>	
	</section>
		<section class="clever-box clever-box-last">
			<div class="rationale">

				<div class="rationale-heading-right">
					
					<h1><?php the_field('service_lebel_right');?></h1>
				</div>
						<?php the_field('ui_design'); ?>
					<div class="buttons">
						<a class="button hvr-shutter-out-horizontal" href="hire.html">Work With Me</a>
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
				
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="work.html">See the project</a>
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
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="work.html">See the project</a>
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
				<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="work.html">See the project</a>
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
			<a class="reverse-button hvr-shutter-out-horizontal-reverse" href="https://theme.valancers.com/services/">Get Started</a>
		</section>
	</div>
		

<?php get_sidebar(); ?>

<?php get_footer(); ?>
