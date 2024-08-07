<?php

/**
 * Template Name: Contact
 *
 * @package pc_boutique
 */
?>

<?php get_header(); ?>

<article id="contact_container">
	<h1>CONTACTEZ</h1>
	<div class="contact_info">
		<span id="span_call"><img id="call_icon" src="<?php echo THEME_IMG_PATH; ?>/call.svg" alt=""></span>
		<p>+41 78 934 19 56</p>
	</div>
	<div class="contact_info">
		<span><img id="location_icon" src="<?php echo THEME_IMG_PATH; ?>/location_on.svg" alt=""></span>
		<p>Route de Malcroissant 18,<br>1295 Tannay</p>
	</div>
	<div class="contact_info">
		<span><img id="call_icon" src="<?php echo THEME_IMG_PATH; ?>/schedule.svg" alt=""></span>
		<p>Lundi-Vendredi : 17h30-22h00<br>Samedi: sur rendez-vous</p>
	</div>
</article>

<?php get_footer(); ?>