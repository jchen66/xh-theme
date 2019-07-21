<?php
/*
    Template Name:  Contact Page
*/


get_header(); ?>

<div class="section">
    <div class="container text-center">
        <h1>Contact Me</h1>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6">
                        <?php $loop = new WP_Query( array('post_type' => 'contact_informations') );?>
                        <?php if( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h3><?php echo the_field('contact_name') ?></h3>

                            <div class="contact--connect">
                                <div class="mb-3">
                                    <address class="mb-0">
                                        <strong>Email:</strong><br>
                                        <?php echo the_field('email_contact') ?><br>
                                        <strong>Telephone:</strong><br>
                                        <?php echo the_field('phone_number') ?>
                                    </address> 
                                </div>
                                <div>
                                    <ul class="social-links">
                                        <li><i class="fab fa-weixin"></i> <a class="xh-contact" href="<?php echo the_field('wechat_username') ?>">Weixin</a></li>
                                        <li><i class="fab fa-facebook-square"></i> <a class="xh-contact" href="<?php echo the_field('facebook_profile_url') ?>">Facebook</a></li>
                                        <li><i class="fab fa-instagram"></i> <a class="xh-contact" href="<?php echo the_field('instagram_username') ?>">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php  endif; ?>
                        
                    </div>
                    <div class="col-sm-6">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVd_S8HOVo_v-v2_JaAK_Ajrt1kfAszb84GPounwnXg32ZW0Maqg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>