<?php get_header() ?>
<!-- main -->

<main class="main second-main">
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
                  <li><span class="category-tag">Web</span><span>(2)</span></li>
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
        </section>
      </div>
</main>


<?php get_footer() ?>