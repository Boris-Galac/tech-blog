<?php get_header() ?>
<!-- main -->

<main class="main second-main">
     <?php
               $categories = get_categories();
               foreach ($categories as $cat) {
                   $category_link = get_category_link($cat->cat_ID);
                  ?>
                  <?php

               }
                ?>
     
     
<div class="container">
        <h2 class="all-blogs__heading h2--heading">all blogs projects</h2>
        <div class="all-blog__container">
          <div>
            <div class="all-blogs__wrapper">
              <?php
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $restPosts = new WP_query(array(
                    'post_type'=>'post',
                    'paged'=> $paged,
                    
                  ));
                  while($restPosts->have_posts()){
                    $restPosts->the_post(); ?>

                        <?php get_template_part('template-parts/content', 'blog') ?>
              <?php  
?>
              <?php  }
wp_reset_query();
?>
            </div>
            <div class="pagination">
              <div class="container">                
                <div class="pagination__wrapper">
              <?php 
              $pages = array(
                'total'=>$restPosts->max_num_pages
              );
              echo paginate_links($pages);
    ?>
                </div>
              </div>
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