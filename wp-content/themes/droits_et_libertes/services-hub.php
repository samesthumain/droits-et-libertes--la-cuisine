<?php 
/**
 * 	Template Name: Services-hub
 *  Template Post Type: page
 */

get_header(); // Affiche header.php
?>
<h1><?php  the_title(); ?></h1>

<?php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	$service = new WP_Query('post_type=service');
	while ( $service -> have_posts() ) : $service -> the_post(); 
?>



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
		<div class="luttes-box">
          <a href="./service.html"><?php echo the_field("titre_du_service"); ?></a
          ><img src="./sources/medias/image/fleche_drop_shadow.png" />
        </div>

	</div>
      
</div>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>