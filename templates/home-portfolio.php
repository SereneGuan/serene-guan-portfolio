<section id="work" class="portfolio">

    <div class="wrapperglobal">
        <ul id="filters" class="filters" name="work">
            <li id="filter-all" class="filter-all active" data-filter="*">ALL</li>
            <li id="filter-uiux" class="filter-uiux" data-filter=".uiux">UI/UX</li>
            <li id="filter-dev" class="filter-dev" data-filter=".dev">DEV</li>
            <li id="filter-industrial" class="filter-industrial" data-filter=".industrial">INDUSTRIAL</li>
            <li id="filter-graphix" class="filter-graphix" data-filter=".graphix">GRAPHIX</li>
        </ul>

        <ul id="work-list" class="workcover">
            <?php 
                        $args = array( 
                            'post_type' => 'work',
                            'posts_per_page' => -1,
                            'orderby' => 'menu_order',
                            'order' => 'DESC'
                        );
                        $posts = new WP_Query( $args ); 
                        while ( $posts->have_posts() ) : $posts->the_post();  

                    ?> 
                        

            <li class="element-item <?php echo get_field('work_category'); ?> <?php echo get_field('work_category_copy'); ?>">
                <a href="<?php esc_url( the_permalink() ); ?>">
                    <?php the_post_thumbnail();?> 
                    <div class="text-overlay"><span class="cover-text"><?php echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt);?></span></div>
                </a>
            </li>
            <?php                            
                endwhile;
                wp_reset_postdata();
            ?>
        </ul>

    </div>
</section>
