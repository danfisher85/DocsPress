<?php

/**
 * @author: VLThemes
 * @version: 1.0.0
 */

get_header(); ?>

<main class="vlt-main site-main">

	<div class="docspress-archive">
		<ul class="docspress-archive-list">
				<?php
				if ( have_posts() ) :
						while ( have_posts() ) :
								the_post();
								?>
								<li class="docspress-archive-list-item">
									<a href="<?php the_permalink(); ?>" class="docspress-archive-list-item-title docspress-archive-list-item-title--changelog">
										<?php the_post_thumbnail( 'docspress_archive' ); ?>
										<span>
											<h2><?php the_title(); ?></h2>
										</span>
									</a>
								</li>
								<?php
						endwhile;
				endif;
				?>
		</ul>
	</div>

	<?php
		wp_link_pages(
				array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'docs' ),
						'after'  => '</div>',
				)
		);
	?>
</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>
