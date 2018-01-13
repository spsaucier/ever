<div class="fullwidth-content">
	<div class="page-header">
	  <h1>Client Stories</h1>
	</div>
	<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php else : ?>
		<div class="row">
			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php the_posts_navigation(); ?>
</div>