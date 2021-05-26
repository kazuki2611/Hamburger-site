<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="p-wrapper">
    <div class="p-grid">



      <header class="l-header">
        <div class="l-header__left">
          <h1 class="c-title u-color">
            <!-- Hamburger --> <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

          </h1>
        </div>
        <div class="l-header__right">
          <?php get_search_form(); ?>
      </header>