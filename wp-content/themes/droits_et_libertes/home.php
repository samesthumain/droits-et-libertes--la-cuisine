<?php 
/**
 * 	Template Name: Accueil
 *  Template Post Type: post, page
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<!-- ?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				< ?php the_title(); // Titre de la page ?>
			</h2>
		< ?php endif; ?-->

		<div class="divider">
  			<img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider.png">
  			<div class="divider__line"></div>
		</div>

		<div class="content">
        <!-- Nouvelle -->
        <!--h1 class="titre-section">NOUVELLES</h1-->
		
		<?php
			get_template_part( 'partials/news-hub' );
		?>

        <!--div class="nouvelles-cards">
          <div class="nouvelles-cards__card">
            <img src="./sources/medias/image/img_carnet.png" />
            <div class="container">
              <p>
                Simplifier le régime d’assistance sociale? C’est un peu court!
              </p>
              <p class="infos-add">10 octobre 2024</p>
            </div>
          </div>

          <div class="nouvelles-cards__card">
            <img src="./sources/medias/image/img_police.jpg" />
            <div class="container">
              <p>
                Pour l'interdiction des interpellations policieres une bonne
                fois pour tout.
              </p>
              <p class="infos-add">4 septembre 2024</p>
            </div>
          </div>

          <a href="./news-article.html" class="nouvelles-cards__card">
            <img src="./sources/medias/image/img_lettre_trudeau.png" />
            <div class="container">
              <p>
                Le Canada doit stopper de façon urgente l’exportation d’armes à
                destination d’Israël
              </p>
              <p class="infos-add">27 aout 2024</p>
            </div>
          </a>
        </div-->

        <!-- Nos luttes -->
        <!--h1 class="titre-section">NOS LUTTES</h1>
        <div class="nos-luttes-list">
          <a href="">Covid-19 </a>
          <a href="">Droit a la santé</a>
          <a href="">Droit d'association</a>
          <a href="">Droit des personnes en detention et enjeux carceraux</a>
        </div-->

        <!-- Temoignages -->
        <h1 class="titre-section h1">TEMOIGNAGES</h1>

        <div class="temoignage-cards">
          <div class="temoignage-cards__card">
            <img src="./sources/medias/image/vrais_temoin/denis_langlois.jpg" />
            <div class="container">
              <h4>Denis Langlois</h4>
              <p>
                La démarche nous a également menés à inscrire le rapport sur les
                droits humains […] 
              </p>
            </div>
          </div>

          <div class="temoignage-cards__card">
            <img
              src="./sources/medias/image/vrais_temoin/hommage-dominique-boisvert.png"
            />
            <div class="container">
              <h4>Dominique Boivert</h4>
              <p>
                Changer le monde est une responsabilité, chacun à notre modeste
                niveau[…]
              </p>
            </div>
          </div>

          <div class="temoignage-cards__card">
            <img src="./sources/medias/image/vrais_temoin/lucie_lemonde.jpg" />
            <div class="container">
              <h4>Lucie Lemonde</h4>
              <p>
                Nous étions une poignée au Canada à mener les premières
                batailles […]
              </p>
            </div>
          </div>
        </div>

        <!-- Donations -->
        <!--div class="donations-box">
          <p>Toute donation est extrêmement apprécié</p>
          <button class="donations-box__bouton">Donner Ici</button>
        </div-->
      </div>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>