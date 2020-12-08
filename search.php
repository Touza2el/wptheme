<?php get_header(); ?>

<main class="blog-posts-content ">
  <div class="container">
    <div class="posts-container">
      <h2>Search Result for '<?php echo get_search_query(); ?>'</h2>
      <div class="posts-content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php get_template_part('includes/content', 'post'); ?>
        <?php endwhile; else: echo '<p>No Content Found !!</p>'; endif; ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>