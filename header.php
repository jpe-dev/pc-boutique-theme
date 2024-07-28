<!DOCTYPE html>
<html lang="fr">

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Days+One&family=Inter:wght@100..900&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<nav>
		<div id="logo_group">
			<a href="/"><img src="<?php echo THEME_IMG_PATH; ?>/Logo.svg" alt="site logo"></a>
			<span>PC-BOUTIQUE</span>
		</div>
		<div id="buttons_group" class="inter">
			<a href="/contact"><span id="btn_contact" class="button">CONTACTEZ</span></a>
			<a href="/boutique"><span id="btn_shop" class="button"><img id="icon_shop" src="<?php echo THEME_IMG_PATH; ?>/white_shop.svg" alt="">ACHETEZ</span></a>
		</div>
	</nav>