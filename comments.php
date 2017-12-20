<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div id="comments" class="col-md-8 comments-area">
			<?php
			if ( have_comments() ) : ?>
					<h2 class="comments-title">
						<?php
						$comment_count = get_comments_number();
						if ( 1 === $comment_count ) {
								printf( /* translators: 1: title. */
									esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'elcapo' ),
									'<span>' . get_the_title() . '</span>'
								);
						} else {
								printf(  // WPCS: XSS OK.
										/* translators: 1: comment count number, 2: title. */
									esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'elcapo' ) ),
									number_format_i18n( $comment_count ),
									'<span>' . get_the_title() . '</span>'
								);
						}
						?>
					</h2>
					<?php the_comments_navigation(); ?>
					<div class="comment-list">
						<?php
							wp_list_comments( array(
								'style'      => 'div',
								'short_ping' => true,
							) );
						?>
					</div>
					<?php
					the_comments_navigation();
					if ( ! comments_open() ) :
					?>
						<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'elcapo' ); ?></p>
					<?php
					endif;
				endif;
				comment_form( array(
					'class_submit'  => 'btn btn-primary comment-button',
					'comment_field' => '<label for="exampleFormControlTextarea1" class="comment-label">Comment</label>
										<textarea class="form-control" id="comment" name="comment" rows="3"></textarea>',
				));
			?>
		</div>
	</div>
</div>
