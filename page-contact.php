<?php get_header() ?>
<!-- main -->

<main class="main second-main">
      <div class="container">
            <h1 class="h1--heading">contact us</h1>
            <div class="contact-wrapper">
                  <div class="contact-form">
                        <?php the_content() ?>
                  </div>
                  <figure class="contact-img">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="contact-img">
                  </figure>
            </div>
      </div>
</main>


<?php get_footer() ?>