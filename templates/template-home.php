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
				<a href="/boutique"><span id="main_button_greyed"><?php echo file_get_contents(THEME_IMG_PATH . "/white_chevron_right.svg") ?>
					</span></a>
			</div>
		</div>
		<div class="banner" id="main_right_banner">
			<div id="rating">
				<p class="inter">TAUX DE</p>
				<span>
					<img class="banner_star" src="<?php echo THEME_IMG_PATH; ?>/Star.svg" alt="">
					<img class="banner_star" src="<?php echo THEME_IMG_PATH; ?>/Star.svg" alt="">
					<img class="banner_star" src="<?php echo THEME_IMG_PATH; ?>/Star.svg" alt="">
					<img class="banner_star" src="<?php echo THEME_IMG_PATH; ?>/Star.svg" alt="">
					<img class="banner_star" src="<?php echo THEME_IMG_PATH; ?>/Star.svg" alt="">
				</span>
				<p id="rating_average">5,0</p>
			</div>
			<img id="banner_pc" src="<?php echo THEME_IMG_PATH; ?>/banner-pc.png" alt="">
			<div id="reviews">
				<div id="reviews_number_div">
					<p id="reviews_number">350+</p>
					<p class="inter" id="satisfied_customers_text">clients<br>satisfaits</p>
				</div>
				<div id="reviews_link_div">
					<span id="reviews_images">

					</span>
					<span id="reviews_link" class="inter">
						<p>LES AVIS</p>
						<a href="/reviews"><span id="reviews_link_chevron"><?php echo file_get_contents(THEME_IMG_PATH . "/white_chevron_right.svg") ?></span></a>
					</span>
				</div>
			</div>
		</div>

	</div>
</main>

<section id="services">
	<h2>NOS OFFRES PRINCIPALES</h2>
	<div id="service_container">
		<div class="service">
			<img id="service_computer" src="<?php echo THEME_IMG_PATH; ?>/service_computer.png" alt="">
			<h3>Vente de produits informatiques</h3>
			<p class="inter">Explorez notre large gamme de PC portables, PC fixes gaming et PC de bureau pour la bureautique.</p>
		</div>
		<div class="service">
			<img id="service_power" src="<?php echo THEME_IMG_PATH; ?>/service_power.png" alt="">
			<h3>Services de montage</h3>
			<p class="inter">Confiez-nous le montage de votre PC pour une performance optimale.</p>
		</div>
		<div class="service">
			<img id="service_gear" src="<?php echo THEME_IMG_PATH; ?>/service_gear.png" alt="">
			<h3>Nettoyage et réparation de PC</h3>
			<p class="inter">Gardez vos équipements en parfait état grâce à nos services de nettoyage et de réparation.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>