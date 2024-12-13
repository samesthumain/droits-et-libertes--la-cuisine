<?php 
/**
 * 	Template Name: nouvelle-article
 * 	Template Post Type: nouvelle, page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<div class="divider">
        <img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider.png" />
            <div class="divider__line"></div>
          </div>

        <div class="nouvelle-article-box">

            <div class="nouvelle-article-titre">
                <h1><?php echo get_field('titre_de_la_nouvelle'); ?></h1>
                <img>
            </div>

            <?php the_post_thumbnail(); ?>

            <div class="nouvelle-article-docu">
                <p><?php echo get_field('date_de_la_nouvelle'); ?></p> 
            </div>

            <div class="nouvelle-article-summary">
                <p><?php echo get_field('resumer_de_la_nouvelle'); ?>
                    </p>
            </div>

            <div class="nouvelle-article-desc content">
                <p><?php echo get_field('texte_complete'); ?>
                    </p>

                <div class="nouvelle-article-sources">
                    <div>
                        <p>
                            <?php echo get_field('sources_pour_la_nouvelle'); ?>
                            </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="nouvelle-sharing-box">
            <h4>PARTAGEZ LA NOUVELLE</h4>
			<img class="facebook" src="<?php bloginfo('template_url'); ?>/images/icons8-facebook.svg">
          <img class="instagram" src="<?php bloginfo('template_url'); ?>/images/icons8-instagram.svg">
          <img class="twitter" src="<?php bloginfo('template_url'); ?>/images/icons8-twitter.svg">
        </div>

        <div class="nouvelle-fleche-box">
            <div class="fleche-precedante">
                <p>Nouvelle precedante</p>
            </div>
            <div class="fleche-next">
                <p>Nouvelle suivante</p>
            </div>
        </div>
	</article>
<?php endwhile; // Fermeture de la boucle

the_content(); // Contenu principal de la page

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>