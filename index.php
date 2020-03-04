<?php get_header(); ?>
<main class="bg-light">
    <div class="container">
        <!-- Pick up articles-->
        <div class="row py-3">
            <?php 
                // top query
                $top_query = new WP_Query( 'tag=toppicking' ); ?>
                <?php if ( $top_query->have_posts() ) : ?> 
                    <?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>
                        <div class="col-md-4 col12">
                            <div class="bg-white py-3">
                                <!-- Thumbnail -->
                                <div class="pb-3">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                                    <?php else : ?>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img3.png" alt="">
                                    <?php endif; ?> 
                                </div>
                                <!-- Title -->
                                <h2 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                                <!-- Button -->
                                <div class="text-center">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="d-inline-block border p-3 text-secondary">
                                            Read more
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                <?php endif; 
            ?>
        </div>
        <!-- Main contents -->
        <div class="row py-3">
            <div class="col-md-8 col-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="bg-white py-3 mb-5 text-center">
                        <!-- Date -->
                        <p><?php the_time('Y/n/j'); ?></p>
                        <!-- Title -->
                        <h2 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
                        <!-- Category -->
                        <p><?php the_category( ' ' ); ?></p>
                        <!-- Thumbnail -->
                        <div class="pb-3">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                            <?php else : ?>
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img3.png" alt="">
                        <?php endif; ?> 
                        </div>
                        <!-- Desription -->
                        <p class="text-secondary"><?php the_excerpt(); ?></p>
                        <!-- Button -->
                        <div class="text-center">
                            <a href="<?php the_permalink(); ?>">
                                <div class="d-inline-block border p-3 text-secondary">
                                    Read more
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                <?php endif; ?>
            </div>
            <!-- Side bar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>