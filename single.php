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
      
        
         
         
          
            

       






    </main>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>