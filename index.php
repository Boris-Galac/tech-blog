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
            <aside class="aside">
              <form role="search" class="aside__search-form">
                <input
                  class="aside__search-input"
                  type="search"
                  aria-label="search"
                  placeholder="Search for a blog"
                />
              </form>
              <div class="aside__categories">
                <h3 class="aside__category-heading h3--heading">Categories</h3>
                <div>
                  <ul class="aside__category-list">
                    <li>
                      <span class="category-tag">Web</span><span>(2)</span>
                    </li>
                    <li>
                      <span class="category-tag">Software</span><span>(8)</span>
                    </li>
                    <li>
                      <span class="category-tag">Gaming</span><span>(11)</span>
                    </li>
                    <li>
                      <span class="category-tag">Hardware</span><span>(3)</span>
                    </li>
                    <li>
                      <span class="category-tag">Technology</span
                      ><span>(16)</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="aside__tags">
                <h3 class="aside__tags-heading h3--heading">Popular tags</h3>
                <div class="aside__tag-wrapper">
                  <span class="aside__tag tag">Internet</span>
                  <span class="aside__tag tag">Shop</span>
                  <span class="aside__tag tag">Monitor</span>
                  <span class="aside__tag tag">Entertaiment</span>
                  <span class="aside__tag tag">Selling</span>
                </div>
              </div>
            </aside>
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