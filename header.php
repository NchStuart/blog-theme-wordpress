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
            if (has_nav_menu('top')) {
                wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => false,
                    'fallback_cb' => false,
                    'menu_class' => 'nav navbar-nav',
                ]);
            }
  ?>
          </div>
        </div>
      </nav>
    </div>
    <div class="main_header">
      <div class="container">
        <div class="container-fluid">
          <div class="logo"><?php if (has_custom_logo()) {
              the_custom_logo();
          }?></div>
          <div class="main_nav_border">
            <div class="main_nav">
              <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'fallback_cb' => false,
                        'menu_class' => 'nav navbar-nav',
                    ]);
                }
  ?>
              <div class="search_area">
                <?php get_search_form(); ?>
              </div>
            </div>
            <div class="main_info">
              <div class="row">
                <div class="col-sm-8 randompost">
                  <strong>
                    Você já viu?
                  </strong>
                  <?php
                  $args = [
                   'posts_per_page' => 1,
                   'post_type' => 'post',
                   'orderby' => 'rand',
                  ];

  $bm_query = new WP_Query($args);

  if ($bm_query->have_posts()) {
      while ($bm_query->have_posts()) {
          $bm_query->the_post();
          ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <?php
      }
      wp_reset_postdata();
  }
  ?>
                </div>
                <div class="col-sm-4 socialarea">
                  <div class="socialtxt">
                    SIGA:
                  </div>
                  <div class="socialicons">
                    <a href="https://facebook.com" target="_blank">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/facebook.png'; ?>">
                    </a>
                    <a href="https://google.com" target="_blank">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/gplus.png'; ?>">
                    </a>
                    <a href="https://instagram.com" target="_blank">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png'; ?>">
                    </a>
                    <a href="https://twitter.com" target="_blank">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/twitter.png'; ?>">
                    </a>
                    <a href="https://youtube.com" target="_blank">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/youtube.png'; ?>">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>