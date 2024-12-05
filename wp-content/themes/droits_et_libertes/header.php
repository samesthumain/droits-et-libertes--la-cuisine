<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<!--header-->
<div class="header">	
	<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" ?>
    <img src="<?php bloginfo('template_url'); ?>/images/ldl-logo-horizontale-270.png">
	</a>

	<a class="header__logo--full" href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" ?>
    <img src="<?php bloginfo('template_url'); ?>/images/ldl-logo-petit.png">
	</a>

	<button class="header__donation h3">DONNER</button>
    <button class="header__bouton-langue">FR</button>

	<div class="hotdog">
    <img class="hotdog__toggle" src="<?php bloginfo('template_url'); ?>/images/menu_hotdog.png">
    <img class="hotdog__retour display-none" src="<?php bloginfo('template_url'); ?>/images/menu_hotdog_retour.png">
  </div>

	<div class="searchbar">
        <input class="searchbar__search" type="text" placeholder="" />
        <button class="searchbar__loupe" type="submit">
          <img class="searchbar__loupe__image" src="<?php bloginfo('template_url'); ?>/images/icon_loupe.png">
        </button>
    </div>
</div>

<div class="divider divider-header">
  <img class="divider__losange" src="<?php bloginfo('template_url'); ?>/images/losange_divider.png">
    <div class="divider__line"></div>
</div>

<!--navbar-->
    <div class="main-navbar">
		<!--?php 
    //arrays pour sauvegarder ce qui a dans le menu
			$menuTitresArr = array();
      $manuUrlArr = array();

      //va prendre l'info du menu
      if($menuItems = wp_get_nav_items('Menu Principale')){//loop les menus items
        foreach($menuItems as $menuItem){//compare menu item avec chaque page
          echo 'contenu-menu : ' . $menuItem->title;
          $current = ($menuItem->objectId == get_queried_object_id()) ? 'current' : '';
          echo '<li class="' . $current . '"><a href="' . $menuItem->url . '">' . '</a></li>';

          $menuTitresArr[] = $menuItem->title;
          $menuUrlArr[] = $menuItem->url;
        }
      }

      echo var_dump($menuTitresArr);
      echo var_dump($menuUrlArr);

		?-->
    </div>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->

<!--

<a href="./index.html" class="header__logo">
        <img src="./sources/medias/image/logo_small.png" />
      </a>

      <a href="./index.html" class="header__logo--full">
        <img src="./sources/medias/image/logo.png" />
      </a>

      <button class="header__donation h3">DONNER</button>
      <button class="header__bouton-langue">FR</button>

      <div class="hotdog">
        <img
          class="hotdog__toggle"
          src="./sources/medias/image/menu_hotdog.png"
          alt=""
        />
        <img
          class="hotdog__retour display-none"
          src="./sources/medias/image/menu_hotdog_retour.png"
          alt=""
        />
      </div>

      <div class="searchbar">
        <input class="searchbar__search" type="text" placeholder="" />
        <button class="searchbar__loupe" type="submit">
          <img
            class="searchbar__loupe__image"
            src="./sources/medias/image/icon_loupe.png"
            alt=""
          />
        </button>
      </div>
    </div>

    <div class="divider divider-header">
      <img
        class="divider__losange"
        src="./sources/medias/image/losange_divider.png"
        alt=""
      />
      <div class="divider__line"></div>
    </div-->

    <!--navbar-->
    <!--div class="main-navbar">
      <div class="nav-menu display-none">
        <div class="container-liens-menu">
          <a href="./news-hub.html" class="menu-title">NOUVELLES</a>
        </div>
        <div class="container-liens-menu">
          <a href="./services-hub.html" class="menu-title">NOS LUTTES</a>
        </div>
        <div class="container-liens-menu">
          <a href="#" class="menu-title">ÉQUIPE</a>
        </div>
        <div class="container-liens-menu">
          <a href="#" class="menu-title">A PROPOS</a>
        </div>
        <div class="container-liens-menu">
          <a href="#" class="menu-title">FAQ</a>
        </div>
        <div class="container-liens-menu">
          <a href="#" class="menu-title">NOUS JOINDRE</a>
        </div>
      </div>
    </div-->

    <!--MAIN-->
    <!--div class="main">
      <div class="divider">
        <img
          class="divider__losange"
          src="./sources/medias/image/losange_divider.png"
          alt=""
        />
        <div class="divider__line"></div>
      </div>

-->