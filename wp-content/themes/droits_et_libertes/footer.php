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
          <img
            class="facebook"
            src="./sources/medias/image/icons8-facebook.svg"
          />
          <img
            class="instagram"
            src="./sources/medias/image/icons8-instagram.svg"
          />
          <img
            class="twitter"
            src="./sources/medias/image/icons8-twitter.svg"
          />
          <img
            class="youtube"
            src="./sources/medias/image/icons8-youtube.svg"
          />
        </div>
      </div>

      <div class="divider">
        <img
          class="divider__losange"
          src="./sources/medias/image/losange_divider_blanc.png"
          alt=""
        />
        <div class="divider__line--white"></div>
      </div>

      <img />

      <div class="footer__secondary">
        <img
          src="./sources/medias/image/membre_pour_pied_de_page/bdsquebec-logo-email.jpg"
        />
        <img src="./sources/medias/image/membre_pour_pied_de_page/casifq.png" />
        <img
          src="./sources/medias/image/membre_pour_pied_de_page/coalitionaidejuridique.png"
        />
        <img src="./sources/medias/image/membre_pour_pied_de_page/fidh.jpg" />
        <img
          src="./sources/medias/image/membre_pour_pied_de_page/iclmg-csilc.jpg"
        />
        <img
          src="./sources/medias/image/membre_pour_pied_de_page/logo-echec-a-la-guerre-retin.png"
        />
        <img src="./sources/medias/image/membre_pour_pied_de_page/osp.png" />
        <img
          src="./sources/medias/image/membre_pour_pied_de_page/rodcd_logo.png"
        />
        <img src="./sources/medias/image/membre_pour_pied_de_page/rqaca.png" />
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
