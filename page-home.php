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
        <li data-target="#hero-slider" data-slide-to="0" class="active"></li>
        <li data-target="#hero-slider" data-slide-to="1"></li>
        <li data-target="#hero-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slider-slide" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVd_S8HOVo_v-v2_JaAK_Ajrt1kfAszb84GPounwnXg32ZW0Maqg')"></div>      
        </div>
        <div class="carousel-item">
            <div class="slider-slide" style="background-image: url('https://eieihome.com/articles/wp-content/uploads/2018/04/architecture-building-driveway-186077.jpg')"></div>
        </div>
        <div class="carousel-item">
            <div class="slider-slide" style="background-image: url('https://www.eliteholidayhomes.com.au/wp-content/uploads/2018/08/banner2.jpg')"></div>
        </div>
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
                <p> IT SHOULD APPEAR HERE </p>
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
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <?php if( !empty($statistic_1_image) ) : ?>
                                <img src="<?php echo $statistic_1_image['url'] ;?>" alt="<?php echo $statistic_1_image['alt']?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <?php if( !empty($statistic_1_image) ) : ?>
                                    <?php echo $statistic_1_description ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <?php if( !empty($statistic_2_image) ) : ?>
                                <img src="<?php echo $statistic_2_image['url'] ;?>" alt="<?php echo $statistic_1_image['alt']?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <?php if( !empty($statistic_2_image) ) : ?>
                                    <?php echo $statistic_2_description ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <?php if( !empty($statistic_3_image) ) : ?>
                                <img src="<?php echo $statistic_3_image['url'] ;?>" alt="<?php echo $statistic_1_image['alt']?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-6">
                                <?php if( !empty($statistic_3_image) ) : ?>
                                    <?php echo $statistic_3_description ?>
                                <?php endif; ?>
                            </div>
                        </div>
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
