<form action="<?php echo home_url('/'); ?>">
  <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search" required>
  <button type="submit"><i class="fas fa-search"></i></button>
</form>