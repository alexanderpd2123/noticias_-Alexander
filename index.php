<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="container">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
      </a>
    </div>
    <?php
    wp_nav_menu(array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'menu_class' => '',
    ));
    ?>
  </div>
</header>

<main class="container">
  <h2>Últimas noticias</h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
    </article>
  <?php endwhile; else: ?>
    <p>No hay noticias todavía.</p>
  <?php endif; ?>
</main>

<footer>
  <div class="container">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'social-menu',
      'container' => 'nav',
      'menu_class' => '',
    ));
    wp_nav_menu(array(
      'theme_location' => 'footer-menu',
      'container' => 'nav',
      'menu_class' => '',
    ));
    ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
