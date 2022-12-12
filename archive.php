<?php get_header() ?>
<!-- main -->

<main class="main">

      <!-- section recent blogs -->

      <section class="recent-blogs" id="blog-section">
        <div class="container">
          <h2 class="recent-blogs__title h2--heading"><?php the_archive_title() ?></h2>
          <div class="recent-blogs__wrapper">
          <?php

while(have_posts()){
    the_post();
?>
              <?php get_template_part('template-parts/content', 'blog') ?>
<?php } ?>
<?php wp_reset_postdata(); ?>

</section>

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