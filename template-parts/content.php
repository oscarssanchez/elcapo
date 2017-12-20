<div class="container post-container">
	<div class="row post-row">
		<div class="col-md-4">
			<?php esc_html( the_title( '<h1 class="post-title">', '</h1>' ) ); ?>
			<hr class="title-separator">
			<p class="post-author">By <?php esc_html( the_author() ); ?></p>
		</div>
		<div class="col-md-8">
			<article class="post-content">
				<h5 class="post-date uppercase separation"><?php esc_html( the_date() ); ?></h5>
				<?php esc_html( the_content() ); ?>
			</article>
		</div>
	</div>
</div>
