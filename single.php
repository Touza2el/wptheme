<?php get_header(); ?>

<main class="single-post-content">
  <div class="container">
    <div class="post">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('includes/content', 'post'); ?>
      <?php endwhile; else: echo '<p>No Content Found !!</p>'; endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>