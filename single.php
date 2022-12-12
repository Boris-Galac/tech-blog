<?php get_header() ?>
<!-- main -->

<main class="main single-blogpost">
      <div class="container">
        <section class="single-blog-section">
          <article class="single-blog">
            <img
              src="<?php 
              if(get_field('blog-img')){
                  $pageBannerImage = get_field('blog-img');
                  echo $pageBannerImage['url'];
            }
            ?>"
              class="single-blog__img"
            />
            <div class="single-blog__details blog-info">
              <p>Posted on</p>
              <div class="time"><?php the_time('F j, Y') ?></div>
              <span class="separator"></span>
              <p class="single-blog__category tag">
                <?php echo get_the_category_list(', '); ?>
              </p>
              <a href="<?php the_permalink() ?>"><?php comments_number()  ?></a>
              

            </div>
            <div class="single-blog__row-1">
              <h1 class="single-blog__heading h2--heading">
                <?php the_title() ?>
              </h1>
              <?php 
              
              $phrase = get_the_content();
              // This is where wordpress filters the content text and adds paragraphs
              $phrase = apply_filters('the_content', $phrase);
              $replace = '<p class="single-blog__content paragraph">';
          
              echo str_replace('<p>', $replace, $phrase);
              ?> 
            </div>

            <!-- comment section -->

            <?php comments_template(); ?>  
            
          </article>
          <?php get_template_part('template-parts/content', 'sidebar') ?>
        </section>
      </div>
</main>


<?php get_footer() ?>