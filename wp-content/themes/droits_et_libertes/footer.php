<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<div class="footer">
      <div class="footer__first">
        <div class="info-container">
          <button class="donation">donner</button>
          <icon></icon>
          <icon></icon>
          <icon></icon>
          <p>469 Jean-Talon Ouest, bureau 105 Montréal, Québec H3N 1R4</p>
          <span></span>
          <p>Tel: 514 849-7717</p>
          <p>Cell. Medias: 514 715-7727</p>
          <span></span>
          <p>info@liguedesdroits.ca</p>
        </div>

        <div class="container-social-media">
          <img class="facebook" src="<?php bloginfo('template_url'); ?>/images/icons8-facebook.svg">
          <img class="instagram" src="<?php bloginfo('template_url'); ?>/images/icons8-instagram.svg">
          <img class="twitter" src="<?php bloginfo('template_url'); ?>/images/icons8-twitter.svg">
          <img class="youtube" src="<?php bloginfo('template_url'); ?>/images/icons8-youtube.svg">
        </div>
      </div>

      <div class="divider">
        <img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider_blanc.png">
        <div class="divider__line--white"></div>
      </div>

      <img />

      <div class="footer__secondary">
        <img src="<?php bloginfo('template_url'); ?>/images/bdsquebec-logo-email.jpg">
        <img src="<?php bloginfo('template_url'); ?>/images/casifq.png">
        <img src="<?php bloginfo('template_url'); ?>/images/coalitionaidejuridique.png">
        <img src="<?php bloginfo('template_url'); ?>/images/fidh.jpg">
        <img src="<?php bloginfo('template_url'); ?>/images/iclmg-csilc.jpg">
        <img src="<?php bloginfo('template_url'); ?>/images/logo-echec-a-la-guerre-retin.png">
        <img src="<?php bloginfo('template_url'); ?>/images/osp.png">
        <img src="<?php bloginfo('template_url'); ?>/images/rodcd_logo.png">
        <img src="<?php bloginfo('template_url'); ?>/images/rodcd_logo.png">
        <img src="<?php bloginfo('template_url'); ?>/images/rqaca.png">
      </div>
      <p class="copyright">2024/ ligue des droits et libertés/La cuisine</p>
    </div>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
