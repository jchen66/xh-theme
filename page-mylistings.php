<?php
/*
    Template Name:  My Listings

 */

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


<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="my-listings-tab" data-toggle="tab" href="#mylistings" role="tab" aria-controls="mylistings">My Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="my-recommendations-tab"  data-toggle="tab" href="#myrecommendations" role="tab" aria-controls="myrecommendations">My Recommendations</a>
                    </li>
                </ul>
                
            </div>
            <div class="col-md-10">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="mylistings" role="tabpanel" aria-labelledby="my-listings-tab">
                        <div class="row">
                            <?php $estate_loop = new WP_Query( array('post_type' => 'estate') );?>
                            <?php while( $estate_loop->have_posts() ) : $estate_loop->the_post(); ?>
                                <?php if(get_field('is_my_listing') == 'myListing') { ?>
                                    <div class="col-sm-3 col-md-6 col-lg-4">
                                        <div class="section" id="estate--details">
                                            <div class="container">
                                                <div class="listing-preview-item">
                                                    <div>
                                                        <img class="img-thumbnail" src="<?php echo the_field('estate_image_thumbnail')?>" alt="">
                                                    </div>
                                                    <div class="text-right">
                                                        <?php echo the_field('estate_price')?> $ 
                                                    </div>
                                                    <div class="listing-address">
                                                        <?php echo the_field('estate_address')?>
                                                    </div>
                                                    
                                                    <div class="listing-description">
                                                        details<br>
                                                        details<br>
                                                        details<br>
                                                        details<br>
                                                    </div>
                                                    <div class=section>
                                                        <div class="container">
                                                            <div class="text-center">
                                                                <a href="/estate.html" class="btn btn-dark--custom">Learn More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  endwhile; ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="myrecommendations" role="tabpanel" aria-labelledby="my-recommendations-tab">
                        <div class="row">
                            <?php $estate_loop = new WP_Query( array('post_type' => 'estate') );?>
                            <?php while( $estate_loop->have_posts() ) : $estate_loop->the_post(); ?>
                                <?php if(get_field('is_my_listing') == 'myRecommendation') { ?>
                                    <div class="col-sm-3 col-md-6 col-lg-4">
                                        <div class="section" id="estate--details">
                                            <div class="container">
                                                <div class="listing-preview-item">
                                                    <div>
                                                        <img class="img-thumbnail" src="<?php echo the_field('estate_image_thumbnail')?>" alt="">
                                                    </div>
                                                    <div class="text-right">
                                                        <?php echo the_field('estate_price')?> $ 
                                                    </div>
                                                    <div class="listing-address">
                                                        <?php echo the_field('estate_address')?>
                                                    </div>
                                                    
                                                    <div class="listing-description">
                                                        details<br>
                                                        details<br>
                                                        details<br>
                                                        details<br>
                                                    </div>
                                                    <div class=section>
                                                        <div class="container">
                                                            <div class="text-center">
                                                                <a href="/estate.html" class="btn btn-dark--custom">Learn More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  endwhile; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
