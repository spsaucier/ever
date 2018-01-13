<div class="col-sm-4 col-xs-6 col-xxs-12 post-list">
	<article <?php post_class(); ?>>
	  <header>
	  	<a href="<?php the_permalink(); ?>">
			<figure class="featured-image">
				<?php the_post_thumbnail('thumbnail'); ?>
				<figcaption class="entry-summary">
					<?php the_excerpt(); ?>
				</figcaption>
			</figure>
			<h5 class="entry-title"><?php the_title(); ?></h5>
			<?php //get_template_part('templates/entry-meta'); ?>
		</a>
	  </header>
	</article>
</div>