<?php 
/**
 * 	Template Name: news-hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
?>

<article>

<div class="nouvelles-container content">

      <div class="nouvelles-titre"><h1><?php the_title(); ?></h1></div>

<?php
if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	$nouvelle = new WP_Query('post_type=nouvelle');
	while ( $nouvelle->have_posts() ) : $nouvelle->the_post();
?>
		<div class="nouvelles-cards__card">
		<?php the_post_thumbnail(); ?>
            <!--img/-->
            <div class="container">
              <p>
                <?php the_title(); ?>
              </p>
              <p class="infos-add"><?php echo get_field('date_de_la_nouvelle'); ?></p>
            </div>
          </div>


		<!--?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				< ?php the_title(); // Titre de la page ?>
			</h2>
		< ?php endif; ?>
		
		< ?php the_content(); // Contenu principal de la page ?-->
	
<?php endwhile; // Fermeture de la boucle
?>

</div>
</article>

<?php
else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>

<!--div class="nouvelles-container content">

      <div class="nouvelles-titre"><h1>Nouvelles</h1></div-->

<!--div class="nouvelles-cards__card">
            <img src="./sources/medias/image/nouvelles-articles-desobeissance-24-octobre.png"/>
            <div class="container">
              <p>
                La désobéissance civile au service des droits humains
              </p>
              <p class="infos-add">24 octobre 2024</p>
            </div>
          </div-->