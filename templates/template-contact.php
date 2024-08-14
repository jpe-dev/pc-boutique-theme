<?php

/**
 * Template Name: Contact
 *
 * @package pc_boutique
 */
?>

<?php get_header(); ?>

<main id="main_contact">
	<div id="left">
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

		<a href="https://maps.app.goo.gl/VUWe1EXKELCp89XU7" target="_blank" rel="noopener noreferrer"><img id="map" src="<?php echo THEME_IMG_PATH; ?>/map.png" alt=""></a>
	</div>
	<article id="contact_form_container">
		<p class="inter">Nous sommes à votre disposition pour répondre à toutes vos questions et demandes. Remplissez le formulaire ci-dessous ou utilisez les coordonnées fournies pour nous contacter directement.</p>
		<div id="contact_form">
			<input type="text" name="name" id="f_name" placeholder="nom*">
			<input type="text" name="email" id="f_email" placeholder="email*">
			<input type="text" name="phone" id="f_phone" placeholder="téléphone*">
			<input type="text" name="message" id="f_messgae" placeholder="message*">
		</div>
	</article>
</main>


<?php get_footer(); ?>