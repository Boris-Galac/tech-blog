<?php get_header() ?>
<!-- main -->

<main class="main">
      <!-- section hero banner -->

      <section class="hero-banner">
        <div class="container">
          <div class="hero-banner__headline-wrapper">
            <img
              src="/wp-content/themes/tech-blog/src/styles/images/logo.svg"
              alt="logo"
              class="hero-banner__headline"
            />
            <p class="hero-banner__subheadline">
              This is a blog about technology news. Enjoy in reading!
            </p>
          </div>
        </div>
        <div class="scroll-down"><a href="#blog-section"><img src="<?php echo get_theme_file_uri('/src/styles/icons/scroll-down.svg')?> " alt="scroll"></a></div>
      </section>

      <!-- section recent blogs -->

      <section class="recent-blogs" id="blog-section">
        <div class="container">
          <h2 class="recent-blogs__title h2--heading">recent blogs</h2>
          <div class="recent-blogs__wrapper">
          <?php
while(have_posts()){
    the_post();
?>
              <article class="blog-card">
                <a href="<?php the_permalink() ?>">
              <img
              src="<?php
              echo get_the_post_thumbnail_url(get_the_ID(), 'blog-thumbnail'); ?>"
                  alt="blog image"
                  class="blog-card__img"
                />
                </a>
                <div class="blog-card__body">
                  <div class="blog-card__info blog-info">
                  <?php echo get_the_category_list(', '); ?><span class="separator"></span><?php the_time('F j, Y') ?>
                  </div>
                  <h3 class="blog-card__title"><?php the_title() ?></h3>
                  <p class="blog-card__text paragraph">
                    <?php echo wp_trim_words(get_the_content(), 30) ?>
                  </p>
                  <a href="<?php the_permalink() ?>" class="blog-card__read-more btn-primary"
                    >read more</a
                  >
                </div>
            </article>
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