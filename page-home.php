<?php
/*
    Template Name:  Home Page

 */
// Advanced Custom Fields
$self_introduction_name = get_field('self_introduction_name');
$self_description = get_field('self_description');
$statistic_1_image = get_field('statistic_1_image');
$statistic_1_description = get_field('statistic_1_description');
$statistic_2_image = get_field('statistic_2_image');
$statistic_2_description = get_field('statistic_2_description');
$statistic_3_image = get_field('statistic_3_image');
$statistic_3_description = get_field('statistic_3_description');



get_header(); ?>
<div id="hero-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
        
        <?php $img_loop = new WP_Query( array('post_type' => 'home_images') );?>
            
        <?php $counter= -1; while( $img_loop->have_posts() ) : $img_loop->the_post(); $counter++?>
            <?php if($counter == 0) { ?>
                <li data-target="#hero-slider" data-slide-to="<?php echo $counter; ?>" class="active" ></li>
            <?php } else { ?>
                <li data-target="#hero-slider" data-slide-to="<?php echo $counter; ?>" ></li>
            <?php } ?>
        <?php  endwhile; ?>
    </ol>
    <div class="carousel-inner">
        <?php $img_loop = new WP_Query( array('post_type' => 'home_carousel') );?>
        <?php $counter= -1; while( $img_loop->have_posts() ) : $img_loop->the_post(); $counter++?>
            <?php if($counter == 0) { ?>
                <div class="carousel-item active">
                    <div class="slider-slide" style="background-image: url('<?php echo the_field('home_gallery_image')?>')"></div>      
                </div>
            <?php } else { ?>
                <div class="carousel-item">
                    <div class="slider-slide" style="background-image: url('<?php echo the_field('home_gallery_image')?>')"></div>
                </div>
            <?php } ?>
        <?php  endwhile; ?>
    </div>
    <a class="carousel-control-prev" href="#hero-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#hero-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="row justify-content-center">
    <div class="col-sm-8">
        <div class="section" id="home--about">
            <div class="container">
                <p><strong><?php echo $self_introduction_name ?></strong> <?php echo $self_description?> </p>
            </div>
        </div>
        <div class="section" id="home--listings">
            <div class="container text-center">
                <a href="/mylistings.html" class="btn btn-dark--custom">My Listings</a>
            </div>
        </div>
        <div class="section" id="home--pitch">
            <div class="container">
                <div class="row">
                    <div class="col-sm-11">
                        <?php $loop = new WP_Query( array('post_type' => 'xh_stats') );?>
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="row justify-content-center">
                                <div class="col-sm-4">
                                    <?php if( !empty(the_field('statistic_image')) ) : ?>
                                    <img src="<?php echo the_field('statistic_image')['url'] ;?>" alt="<?php echo the_field('statistic_image')['alt']?>">
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php if( !empty(the_field('statistic_description')) ) : ?>
                                        <?php echo the_field('statistic_description') ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php  endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="home--testimonials">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <?php $loop = new WP_Query( array('post_type' => 'testimonies') );?>
                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="testimonial">
                                <p><?php the_field('client_testimony'); ?></p>
                                <p class="text-right">- <?php the_field('client_name'); ?></p>
                            </div>
                        <?php  endwhile; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
