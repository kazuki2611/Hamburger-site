<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <main class="l-main__single">
      <div class=" p-hero__single">

        <?php the_post_thumbnail(); ?>
        <h1 class="c-header__title3">
          <?php the_title(); ?>
        </h1>





      </div>
      <div class="p-service__wrap__single">


        <div class="p-service__archive p-service__single">
          <h2 class="c-service__archive__title c-service__single__title">
            見出しh２
          </h2>
          <!-- <p>
          Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
        </p> -->
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <h3 class="c-headline__3__single">見出しh3</h3>
      <h4 class="c-headline__4__single">見出しh4</h4>
      <h4 class="c-headline__4__single">見出しh3</h4>
      <h4 class="c-headline__4__single">見出しh4</h4>
      <h4 class="c-headline__4__single">見出しh5</h4>
      <h4 class="c-headline__4__single">見出しh6</h4>
        </div>
        <div class="p-service-single">
          <blockquote class="c-blockquote__text">
            Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
          </blockquote>
          <p class="c-blockquote__source ">
            出典元： ○○○○○○○○○○○○
          </p>
        </div>
        <div class="p-menu__single">
          <div class="c-menu__picture__main">

          </div>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="p-menu-box1__single">
                <div class="c-menu-box__picture"></div>
                <?php the_content(); ?>

              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="p-menu-box2__single">
            <div class="c-menu-box__picture"></div>
            <p class="c-menu-box__text u-margin__single u-text">
              テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
            </p>
          </div>
          <div class="c-menu__picture__sub"></div>
          <div class="p-menu__list__grid">

            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
            <div class="c-menu__list"></div>
          </div>
        </div>
        <div class="p-list">
          <ul class="p-list__wrap">
            <li class="u-margin__single3">1.リストリストリスト</li>
            <li>2.リストリストリスト</li>
          </ul>
          <ul class="p-list__wrap u-margin__single2">
            <li>1.リスト2リスト2リスト2</li>
            <li>2.リスト2リスト2リスト2</li>
          </ul>
          <ul class="p-list__wrap">
            <li>1.リストリストリスト</li>
            <li>2.リストリストリスト</li>
          </ul>

        </div>

        <div class="p-list__sub">
          <ul class="p-list__wrap">
            <li class="c-list__item">リストリストリスト</li>
            <li class="c-list__item">リストリストリスト</li>

          </ul>
          <ul class="p-list__wrap u-margin__single2 ">
            <li class="c-list__item">
              リスト2リスト2リスト2

            </li>
            <li class="c-list__item ">
              リスト2リスト2リスト2

            </li>
          </ul>
          <ul class="p-list__wrap">
            <li class="c-list__item">
              リストリストリスト

            </li>
            <li class="c-list__item">
              リストリストリスト
            </li>
          </ul>
        </div>
        <pre>
  &lt;html&gt;
      &lt;head&gt;
      &lt;/head&gt;
      &lt;body&gt;
      &lt;/body&gt;
  &lt;/html;&gt;

</pre>
        <table class="p-table">
          <tr>
            <th>テーブル</th>
            <td>テーブル</td>
          </tr>
          <tr>
            <th>テーブル</th>
            <td>テーブル</td>
          </tr>
          <tr>
            <th>テーブル</th>
            <td>テーブル</td>
          </tr>
          <tr>
            <th>テーブル</th>
            <td>テーブル</td>
          </tr>
        </table>
        <button class="c-menu__button__single">
          ボタン
        </button>
        <div class="c-text__bold">
          <b>boldboldboldboldboldboldbold</b>
        </div>
      </div>







    </main>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>