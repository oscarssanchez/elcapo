<?php
get_header();
while ( have_posts() ) :
	the_post();
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="page-title"><?php esc_html( the_title() ); ?></h1>
			<p><?php esc_html( the_content() ); ?></p>
		</div>
	</div>
</div>
<?php
if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
endwhile;
?>
<?php
	get_template_part( 'template-parts/contact', 'all' );
get_footer();
