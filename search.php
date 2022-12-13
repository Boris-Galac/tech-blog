<?php get_header() ?>
<!-- main -->

<main class="main second-main">
<div class="container">
        <h2 class="all-blogs__heading h2--heading"><?php the_archive_title() ?></h2>
        <div class="all-blog__container">
          <div>
            <div class="all-blogs__wrapper">
              <?php
              if(have_posts()){
                  while(have_posts()){
                    the_post(); ?>
                        <?php get_template_part('template-parts/content', 'blog') ?>
                                  <?php  
                                  ?>
                            <?php  }
                          }else{
                            echo '<h1 class="no-results__heading">no results found</h1>';
                          }
              wp_reset_query();
              ?>
            </div>
          </div>
          <div>
            <?php get_template_part('template-parts/content', 'sidebar') ?>
          </div>
        </div>
      </div>
      <!-- section socials -->
      <section class="socials">
          <div class="container">
            <div class="socials__wrapper-icons">
              <h2 class="socials__heading h2--heading">see you on</h2>
              <div>
                <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-1.svg" class="socials__icon" alt="freecodecamp"></a>
                <span class="separator"></span>
                <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-2.svg" class="socials__icon" alt="codepen"></a>
                <span class="separator"></span>
                <a href="#"><img src="/wp-content/themes/tech-blog/src/styles/icons/social-3.svg" class="socials__icon" alt="github"></a>               
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer() ?>