<div class="col-md-4 col-12">

<!-- Profile -->
<?php dynamic_sidebar( 'sidebar_widget01' ); ?>


<!-- Recommend -->
<div class="container bg-white mb-5 py-5">
    <div class="text-center pb-5">
        <h4 class="d-inline-block py-3 border-bottom border-info">Recommend</h4>
    </div>
    <?php 
    // side query
    $side_query = new WP_Query( 'tag=sidepicking' ); ?>
    <?php if ( $side_query->have_posts() ) : ?> 
        <?php while ( $side_query->have_posts() ) : $side_query->the_post(); ?>
            <div class="pb-5">
                <!-- Thumbnail -->
                <div class="pb-3">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( '', array( 'class' => 'img-fluid' ) ); ?>
                    <?php else : ?>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img3.png" alt="">
                    <?php endif; ?>
                </div>
                <!-- Title -->
                <h5 class="h5"><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            </div>
        <?php endwhile; else : ?>
    <?php endif; ?>
</div>