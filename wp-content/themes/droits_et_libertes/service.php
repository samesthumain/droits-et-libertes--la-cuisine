<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
	<div class="service-container">
        <h1 class="service-titre"><?php the_title(); ?></h1>
        <img src="<?php the_post_thumbnail(); ?>">
        <p class="service-slogan"><?php the_field('description_du_service'); ?></p>
    </div>

    <div class="service-nouvelle-relation content">

        <card class="service-nouvelle-card">
            <h2>Simplifier le régime d’assistance sociale? C’est un peu court!</h2>
            <p class="infos-add">10 octobre 2024</p>
            <p>Le projet de loi 71, qui réforme le programme d’aide sociale, propose une nouvelle approche, celle de la médicalisation des prestataires. Les besoins des prestataires, qui sont variés et qui requièrent des mesures sociales et économiques, sont réduits à une contrainte de santé. Inquiétant! </p>
        </card>

        <div class="divider">
          <img
            class="divider__losange"
            src="./sources/medias/image/losange_divider.png"
            alt=""
          />
          <div class="divider__line"></div>
        </div>

        <card class="service-nouvelle-card">
            <h2>Une Coalition braque littéralement les projecteurs sur les écueils du Plan santé du ministre Dubé</h2>
            <p class="infos-add">1 octobre 2024</p>
            <p>Il importe plus que jamais de se mobiliser pour la consolidation d’un réseau public de santé et de services sociaux fort de processus démocratiques et respectueux tant du secteur communautaire que du personnel soignant. </p>
        </card>

        <div class="divider">
          <img
            class="divider__losange"
            src="./sources/medias/image/losange_divider.png"
            alt=""
          />
          <div class="divider__line"></div>
        </div>

        <card class="service-nouvelle-card">
            <h2>Rapport annuel 2023-2024 du Protecteur du citoyen – Des violations de droits inadmissibles</h2>
            <p class="infos-add">19 septembre 2024</p>
            <p>À la lumière des constats du rapport d’activités 2023-2024 du Protecteur du citoyen, la LDL souligne l’importance pour le gouvernement du Québec de se saisir du cadre de référence des droits humains et de comprendre les obligations qui lui incombent. </p>
        </card>

        <div class="divider">
          <img
            class="divider__losange"
            src="./sources/medias/image/losange_divider.png"
            alt=""
          />
          <div class="divider__line"></div>
        </div>

        <card class="service-nouvelle-card">
            <h2>Pinel : Les cas complexes crient au secours !</h2>
            <p class="infos-add">12 septembre 2024</p>
            <p>À l’Institut Pinel, et dans d’autres établissements psychiatriques au Québec, des pratiques autoritaires et déshumanisantes sont encore utilisées dans de trop nombreux cas. Ces méthodes, qui rappellent les anciens asiles, révèlent la nécessité d’une réforme, pour une approche humaine et respectueuse des droits des personnes. </p>
        </card>

    </div>

	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>