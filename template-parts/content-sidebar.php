<!-- sideabar -->


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
                    <?php

                $terms = get_terms( array(
                            'taxonomy'   => 'category', // taxonomy name
                            'hide_empty' => true, 
                    ));

                    foreach( $terms as $term ) {
                        echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a><span>('.$term->count.')</span></li>';
                    }
                    ?>
                </ul>
              </div>
            </div>
            <?php if(has_tag()){
                ?>
                    <div class="aside__tags">
                    <h3 class="aside__tags-heading h3--heading">Popular tags</h3>
                    <div class="aside__tag-wrapper">
                    <?php

                        $terms = get_tags( array(
                                    'hide_empty' => true, 
                            ));
                            

                            foreach( $terms as $term ) {
                                echo '<span class="aside__tag tag">'.  $term->name  .'</span>';
                            }
                            ?>
                    </div>
                    </div>
                        
                <?php
            }
            ?>
          </aside>