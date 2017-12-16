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
				<?php
					$user_info = get_userdata( 1 );
					echo $user_info->first_name . ' ' . $user_info->last_name;
				?>
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
<div class="container-fluid">
	<div class="row">
		<!--Header -->
		<div class="col-md-12 header-title">
			<a href="<?php get_site_url(); ?>"><h1 title> <?php bloginfo(); ?></h1></a>
		</div>
