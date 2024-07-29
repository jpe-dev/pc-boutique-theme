<?php

/**
 * Template Name: Home
 *
 * @package pc_boutique
 */
?>

<?php get_header(); ?>

<main>
    <div id="main-title">
        <h1>BIENVENUE CHEZ</h1>
        <div id="main-sub-title">
            <img id="processor" src="<?php echo THEME_IMG_PATH; ?>/processor.png" />
            <h1>PC-BOUTIQUE</h1>
        </div>
    </div>
    <div id="banners">
        <div class="banner" id="main-left-banner">
            <p>Découvrez nos offres principales en matière de produits informatiques et de services de montage, nettoyage et réparation de PC.<br />
            Nous sommes spécialisés dans la fourniture de solutions informatiques adaptées à vos besoins, que vous soyez un gamer passionné ou un professionnel en quête de performance ou de qualité.</p>
        </div>
        <div class="banner"></div>
    </div>
</main>

<?php get_footer(); ?>