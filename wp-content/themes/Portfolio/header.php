<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>
   	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div class="top-header">
				<a href="<?php echo home_url( ); ?>"><div id="logo" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></div></a>
				<div class="contact">Contacts</div>
					<div class="popup">
						<p>
						E-mail:</br>
						anton.bilousov@gmail.com
						</p>
						<p>
						TEL:<br>
						+380634907724
						</p>
					</div>
					<div id="mobil-contacts">
						<p>
						E-mail:</br>
						anton.bilousov@gmail.com
					</p>
					<p>
						TEL:<br>
						+380634907724
					</p>
					</div>
			</div>
		</div>