<article class='post'>
  <div class="post-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="post-meta-data">
    <p class="post-date"><?php the_author(); ?> | <?php the_time('F jS , Y'); ?></p>
  </div>
  <div class="post-image">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('', array('class' => 'post-thumbnail')); ?>
    </a>
  </div>
  <div class="post-categories">
  <?php
    $categories = get_the_category();
    $separator = " | ";
    $output = '';
    if($categories){
      foreach($categories as $category){
        $output .= '<a href="'.get_category_link($category->term_id).'">' . $category->cat_name . '</a>' . $separator;
      }
      echo trim($output, $separator) ;
    }
  ?>
  </div>
  <div class="post-content">
    <?php the_content('Read More'); ?>
  </div>
</article>