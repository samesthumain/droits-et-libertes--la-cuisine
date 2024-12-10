<?php 
/**
 * 	Template Name: Services-hub
 *  Template Post Type: page
 */

get_header(); // Affiche header.php

?>

		
<div class="divider">
  <img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider.png">
  <div class="divider__line"></div>
</div>
		
	<div class="services-container">

      <div class="img-feuille">
        <!--img src="./sources/medias/image/image_feuille.jpg" alt=""-->
        <p class="services-slogan">CE POURQUOI NOUS LUTTONS!!</p>
      </div>
      <p class="services-description">
        La LDL est un organisme sans but lucratif, indépendant et non partisan,
        issu de la société civile québécoise et affilié à la Fédération
        internationale pour les droits humains (FIDH). Depuis plus de 60 ans,
        elle milite en faveur de la défense et de la promotion de tous les
        droits humains (droits civils, politiques, économiques, sociaux et
        culturels) reconnus par la Charte internationale des droits de l’homme.
        <img class="arrow-down" />
      </p>
		
		<div class="liste-luttes">
<?php $service = new WP_Query(['post_type' => 'service', 'posts_per_page' => -1,]);
    while ($service->have_posts()):
        $service->the_post(); ?>
<div class="luttes-box">
<a href="./service.html"><?php get_field('titre_du_service'); ?></a
><img src="./sources/medias/image/fleche_drop_shadow.png" />
</div>
<?php endwhile ?>
</div>
		
   
      </div>
		
	   <?php endwhile; // Fermeture de la boucle


else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>