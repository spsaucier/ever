<!-- Sidebar -->
<div id="sidebar-wrapper">
  <header class="banner" role="banner">
    <div class="container-fluid">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><span>Ever</span> Weddings</a>
      <nav role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </div>
  </header>
</div><!-- /#sidebar-wrapper -->