<?php get_header(); ?>

<main class="blog-posts-page ">
  <div class="container">
    <div class="blog-posts-content">
      <div class="posts-container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('includes/content', 'post'); ?>
        <?php endwhile; else: echo '<p>No Content Found !!</p>'; endif; ?>
        <?php echo paginate_links(); ?>
      </div>
      <div class="sidebar">
        <?php 
         if(is_active_sidebar('main-sidebar')){
           dynamic_sidebar('main-sidebar');
          } 
          ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>