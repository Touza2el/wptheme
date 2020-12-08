  <div class="container">
    <footer class="site-footer">
      <p>Copyright &copy; <?php echo date('Y'); ?> All Right Reserved.</p>
      <div class="footer-navigation">
        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>