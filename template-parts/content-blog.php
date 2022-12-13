<article class="blog-card">
                      <a href="<?php the_permalink() ?>">
                      <?php if(has_post_thumbnail()){ ?>
                          <img
                          src="<?php 
                          
                          echo get_the_post_thumbnail_url(get_the_ID(), 'blog-thumbnail'); 
                          ?>"
                          alt="blog image"
                          class="blog-card__img"
                          />
                          
                          <?php } else { 
                            $defaultImg = "/wp-content/themes/tech-blog/src/styles/images/default-blog-img.jpg.png"; 
                            ?>
                        <img src="<?php echo $defaultImg; ?>" alt="defalt image" class="default-image">
                        </a>
                        <?php }
                      ?> 
                      <div class="blog-card__body">
                        <div class="blog-card__info blog-info">
                        <?php echo get_the_category_list(', ') ?> <span class="separator"></span><?php the_time('F j, Y')?>
                        <a class="comments-indicator" href="<?php the_permalink() ?>"><?php comments_number()  ?></a>

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