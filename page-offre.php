<?php
/*
Template name: Offre
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div>
          <input type="text" class="searchTerm" placeholder="type d'emplois">
        </div>
        	</br>
        <input type="button"  value="Déposer une offre d'emploi">
        </br>
        <?php if (have_posts()) : ?>
 <h2 class="title">Hey ! Il y a des Posts !</h2>
 <?php while (have_posts()) : the_post(); ?>
   <article class="post">
     <h3 class="post-title">
       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
     </h3>
     <p class="post-info">
       Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
     </p>
     <div class="post-content">
       <?php the_content(); ?>
     </div>
   </article>
 <?php endwhile; ?>
<?php else : ?>
 <p class="nothing">Il n'y a pas de Post à afficher ! </p>
<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php



get_footer();

