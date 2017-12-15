<?php
	get_header(); ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<div class="col-md-3 post">
			<h5 class="post-date uppercase separation"><?php esc_html( get_the_date() ); ?></h5>
			<a href="<?php the_permalink(); ?>"><h3><?php esc_html( get_the_title() ); ?></h3></a>
		</div>
	<?php endwhile; else : ?>
	<p><?php esc_html( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php echo 'index.php'; ?>

<?php get_footer(); ?>
