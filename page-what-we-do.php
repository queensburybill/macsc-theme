<?php 

// Template Name: Page What We Do

get_header(); ?>

	<?php

	// <!-- This is the post loop -->
	if ( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="row mx-0">
					
				<div class="col-xs-12 what-we-do int-content">

					<?php the_content(); ?>

				</div>

			</div> <!-- close row -->

		<?php endwhile;
	endif;
	?>	

<?php get_footer(); ?>