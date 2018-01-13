<?php while (have_posts()) : the_post(); ?>
  <div class="fullwidth-content">
    <article <?php post_class(); ?>>
      <header class="post-header">
        <h1 class="entry-title"><?= str_replace("&#038;", "<span>&amp;</span>", get_the_title()); ?></h1>
        <?php // get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </article>
  </div>
<?php endwhile; ?>