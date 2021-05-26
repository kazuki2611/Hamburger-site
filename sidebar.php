<div class="l-sidebar">

  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'category_nav',
      'menu' => 'ハンバーガー',
      'menu_class' => 'p-global-nav p-global-nav__list p-global-nav__wrap c-global-nav__item u-padding .p-global-nav-archive',
      'container' => 'p-global-nav__list',
      'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
    )
  );
  ?>
  <button class="p-hamburger  is-hamburger">
    <span></span>
  </button>
  <button class="p-hamburger_button">Menu</button>

  <div class="black-bg" id="js-black-bg"></div>


</div>