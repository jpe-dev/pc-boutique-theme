<?php

/**
 * Template Name: Home
 *
 * @package pc_boutique
 */
?>

<?php get_header(); ?>

<main>
	<div id="main_title">
		<h1>BIENVENUE CHEZ</h1>
		<div id="main_sub_title">
			<img id="processor" src="<?php echo THEME_IMG_PATH; ?>/processor.png" />
			<h1>PC-BOUTIQUE</h1>
		</div>
	</div>
	<div id="banners">
		<div class="banner" id="main_left_banner">
			<p class="inter">Découvrez nos offres principales en matière de produits informatiques et de services de montage, nettoyage et réparation de PC.<br />
				Nous sommes spécialisés dans la fourniture de solutions informatiques adaptées à vos besoins, que vous soyez un gamer passionné ou un professionnel en quête de performance ou de qualité.</p>
			<div id="visit_shop_group">
				<div id="visit_group_headline">
					<span id="shop_rounded"><img class="icon_shop" src="<?php echo THEME_IMG_PATH; ?>/white_shop.svg" alt=""></span>
					<p>VISITEZ NOTRE<br />
						BOUTIQUE</p>
				</div>
				<a href="/boutique"><span id="main_button_greyed"><?php echo file_get_contents(THEME_IMG_PATH."/white_chevron_right.svg") ?>
					</span></a>
			</div>
		</div>
		<div class="banner" id="main_right_banner"></div>

	</div>
</main>

<?php get_footer(); ?>