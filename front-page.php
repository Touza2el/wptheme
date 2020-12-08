<?php get_header(); ?>

<main class="front-page">
  <div class="container">
    <div class="front-page-content">
      <section class="latest-posts">
        <div class="latest-posts-content">

          <?php
          $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          );
          $blogposts = new WP_Query($args);
          while($blogposts->have_posts()){
          $blogposts->the_post();
          ?>

          <div class="latest-posts-item">
            <a class="image" href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card">
            </a>
            <a class="title" href="<?php echo the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            <p class="content">
              <?php echo wp_trim_words(get_the_excerpt(),30); ?>
            </p>
            <a class="read-more" href="<?php echo the_permalink(); ?>">Read More</a>
          </div>

          <?php 
            }  
            wp_reset_query(); 
          ?>

        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>