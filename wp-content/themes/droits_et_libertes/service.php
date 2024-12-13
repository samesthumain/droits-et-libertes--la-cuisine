<?php 
/**
 * 	Template Name: service
 * 	Template Post Type: service, page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		 <div class="divider">
      <img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider.png" />
      <div class="divider__line"></div>
    </div>

    <div class="service-container">
        <h1 class="service-titre"><?php echo get_field('titre_du_service'); ?></h1>
        <?php the_post_thumbnail(); ?>
        <p class="service-slogan"><?php echo get_field('description_du_service'); ?></p>
    </div>

<?php endwhile; // Fermeture de la boucle

 the_content(); // Contenu principal de la page 

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>