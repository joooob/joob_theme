<?php
/*
Template name: Demandes
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/archive_offre', 'page' );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div>
          <input type="text" class="searchTerm" placeholder="type d'emplois">
        </div>
    </br>
        <input type="button"  value="Rajoutez votre CV">
    </br>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
