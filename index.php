<?php
get_header(); ?>
<div class="container-fluid">
	<div class="row">
	<?php
	if ( have_posts() ) :
		query_posts( 'posts_per_page=4' );
		while ( have_posts() ) :
			the_post();
			?>
			<div class="col-md-3 post border-loopbox">
				<div class="post-date-box uppercase separation">
					<h5 class="post-date uppercase separation"><?php the_time( get_option( 'date_format' ) ); ?></h5>
					<?php the_category(); ?>
				</div>
				<a class="blog-post-link" href="<?php the_permalink(); ?>"><h3 class="blog-post-title"><?php the_title(); ?></h3></a>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile;?>
	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'elcapo' ); ?></p>
	<?php endif; ?>
	</div>
</div>
<?php
get_template_part( 'template-parts/contact', 'all' );
get_footer();
