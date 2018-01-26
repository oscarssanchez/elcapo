<?php
get_header();
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', get_post_type() );
	if ( comments_open() && ( 0 !== get_comments_number() ) ) :
		comments_template();
	endif;
endwhile;
get_template_part( 'template-parts/contact', 'all' );
get_footer();
