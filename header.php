<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?php
			wp_title( ' - ', true, 'right' );
			bloginfo(); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body>
<!--NAVBAR -->
<div id="header">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
					<img class="navbar-logo" src="http://local.wordpress.test/wp-content/uploads/2018/01/elcapo.png">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
					wp_nav_menu(array(
						'menu'       => 'header-menu',
						'menu_class' => 'nav navbar-nav navbar-right',
					) )
				?>
			</div>
		</div>
	</nav>

	<!--End of Navbar -->
	<div class="container">
		<div class="row">
			<!--Header -->
			<div class="col-md-12 header-title">
				<p class="header-date"><?php echo date( get_option( 'date_format' ) ); ?></p>
				<hr class="header-separator" align="left">
				<a href="<?php get_site_url(); ?>"><h1 class="title"> <?php bloginfo(); ?></h1></a>
			</div>
		</div>
	</div>
</div>
