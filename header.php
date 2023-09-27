<html>

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>

    <div class="top_header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <?php 
            if(has_nav_menu('top')) {
              wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => false,
                'fallback_cb' => false,
                'menu_class' => 'nav navbar-nav'
              ));
            } 
            ?>
          </div>
        </div>
      </nav>
    </div>
    <div class="main_header">
      <div class="container">
        <div class="container-fluid">
          <div class="logo"><?php if(has_custom_logo()) {the_custom_logo();} ?></div>
        </div>
      </div>
    </div>

  </header>