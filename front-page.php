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
          <div class="all-blogs__wrapper">
          <?php
$args = [
 'post_type' => 'post',
 'posts_per_page' => 3
];

$posts = new WP_Query( $args );
while($posts->have_posts()){
    $posts->the_post();
?>
           <?php  get_template_part('template-parts/content', 'blog') ?>
<?php } ?>
<?php echo paginate_links() ?>
<?php wp_reset_postdata(); ?>

      </section>

      <!-- section latest blogs -->

      <section class="latest-blogs">
      <div class="latest-blogs__btns-wrapper">
              <div class="latest-blogs__left-arrow" id="latest-blog-arrow">
                <img src="/wp-content/themes/tech-blog/src/styles/icons/left-arrow.svg" alt="left arrow">
              </div>
              <div class="latest-blogs__right-arrow" id="latest-blog-arrow">
                <img src="/wp-content/themes/tech-blog/src/styles/icons/right-arrow.svg" alt="right arrow">
              </div>
            </div>
          <div class="container">
            <h2 class="latest-blogs__heading h2--heading">latest blogs</h2>
            <div class="latest-blogs__wrapper">
              <?php
                  $args = array(
                    'post_type' => 'post',
                  );
                  $posts = new WP_Query($args);
                  while($posts->have_posts()) : $posts->the_post(); ?>
                           <?php  get_template_part('template-parts/content', 'blog') ?>

                 <?php endwhile; ?>

             
            </div>
          </div>
        </div>
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