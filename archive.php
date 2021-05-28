<?php get_header(); ?>
<div class="l-main-archive">

  <div class="p-hero p-hero__archive">
    <div class="c-header__title2">
      <h1>
        Menu:
      </h1>
      <p>
        <?php single_cat_title(); ?>
      </p>

    </div>


  </div>
  <div class="p-service__archive">
    <h2 class="c-service__archive__title">
      小見出しが入ります
    </h2>
    <p>
      テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
  </div>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- 繰り返し処理する内容 -->

      <div class="p-menu">

        <div class="p-menu__box">



          <div class="p-menu__box__picture"><?php the_post_thumbnail(); ?></div>
          <div class="p-menu__box__wrapper">

            <h3 class="c-menu__title"><?php the_title(); ?></h3>
            <h4 class="c-headline__4"><?php the_tags(); ?></h4>
            <?php the_content(); ?>

            <button class="c-menu__button">
              <a href="<?php the_permalink(); ?>">
                詳しく見る
              </a>
            </button>
          </div>
        </div>


      </div>

    <?php endwhile; ?>
  <?php else : ?>
    <!-- 投稿データがない場合表示される部分 -->
  <?php endif; ?>
  <!-- <div class="p-service-archive__menu">
            <div class="p-menu">
            
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">チーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button">詳しく見る</button>
              </div>
          
          
            </div>
            </div>
          
            <div class="p-menu">
    
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">ダブルチーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button" >詳しく見る</button>
              </div>
          
          
            </div>
            </div>
          
            <div class="p-menu">
          
              <div class="p-menu__box">
          
                <div class="p-menu__box__picture">
            
                </div>
              <div class="p-menu__box__wrapper">
            
                <h3 class="c-menu__title">スペシャルチーズバーガー</h3>
                <h4 class="c-headline__4">小見出しが入ります</h4>
                <p class="c-menu__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                <button class="c-menu__button">詳しく見る</button>
              </div>
          
          
            </div> -->

  <!-- <div class="p-page">
            
            <span class="p-page__pages">page 1/10</span>
            <a class="p-page__link" href="#">≪<span class="p-page-navi__pre">前へ</span></a>
            <a class="c-page-button"  href="#">1</a>
            <a class="c-page-button"  href="#">2</a>
            <a class="c-page-button"  href="#">3</a>
            <a class="c-page-button"  href="#">4</a>
            <a class="c-page-button"  href="#">5</a>
            <a class="c-page-button"  href="#">6</a>
            <a class="c-page-button"  href="#">7</a>
            <a class="c-page-button"  href="#">8</a>
            <a class="c-page-button u-margin" title="Page 9" href="#">9</a>
            <a class="p-page__link" href="#"><span class="p-page-navi__pre u-padding3">次へ</span>≫</a>
          </div>
           -->
  <div class="p-page">
  <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
    <?php global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
      $paginate_format = '';
      $paginate_base = add_query_arg('paged', '%#%');
    } else {
      $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/', 'paged');;
      $paginate_base .= '%_%';
    }
    echo paginate_links(array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 4,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '«',
      'next_text' => '»',
    )); ?>
  </div>




</div>
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>





</body>