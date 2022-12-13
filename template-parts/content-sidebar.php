<!-- sideabar -->


<aside class="aside">
            <?php get_search_form(); ?>
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
        <?php dynamic_sidebar('main_sidebar') ?>
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
            <div class="aside__recent-posts">
                <ul class="aside__recent-posts-list">
                    <?php
                        $args = array(
                            'post_type'=>'post',
                            'posts_per_page'=>3
                        );
                        $posts = new WP_Query($args);
                        if($posts->have_posts()){
                            while($posts->have_posts()){
                                $posts->the_post(); ?>

                                <li>
                                    <article class="recent_post">
                                        <div class="recent_post__body">
                                            <div class="recent_post__meta">
                                                <div class="recent_post__time">
                                                    <?php the_time('F j, Y') ?>
                                                </div>
                                                <div class="recent_post__category">
                                                    <?php echo get_the_category_list(', '); ?>
                                                </div>
                                            </div>
                                            <h3 class="recent_post__heading">
                                                <?php the_title() ?>
                                            </h3>
                                            <a href="<?php the_permalink() ?>">Read more...</a>
                                        </div>
                                    </article>
                                </li>

                            <?php }
                        }
                    
                    ?>
                </ul>
            </div>
          </aside>