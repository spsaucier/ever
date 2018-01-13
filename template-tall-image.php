<?php
/**
 * Template Name: Tall Image Template
 */
?>


<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
		<div class="container-fluid">
			<div class="row mix">
				<div class="leftover">
					<div class="pic"
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							 style="background-image: url('<?php echo $image[0]; ?>')"
						<?php endif; ?>
					></div>
				</div>
				<div class="text-content">
					<div class="content">
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
		</footer>
	</article>

<?php endwhile; ?>

