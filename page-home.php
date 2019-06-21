<?php
/*
    Template Name:  Home Page

 */

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
                <p><strong>Xianhong Claire Zheng</strong> Lorem ipsum dolor sit amet, mea an odio enim instructior. Est vivendum voluptaria ex. Corrumpit democritum pro at, pri odio liber possim ad. Vitae copiosae ex quo, esse tibique sea ea. Ea singulis dignissim his, munere tibique salutatus qui an. Et per habemus percipitur, vix vide dicta in, ius ea simul euripidis. Sed ea paulo disputationi, eam exerci elaboraret consectetuer ea, illud exerci aliquam his te. Cu eos offendit menandri hendrerit, usu in ullum graeco officiis, nam amet oblique mentitum ea.</p>
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
                                Icon
                            </div>
                            <div class="col-sm-6">
                                Suspendisse lobortis efficitur velit, id scelerisque justo luctus at. Nullam at justo accumsan, facilisis purus a, sodales eros. Sed tincidunt commodo ipsum et scelerisque. Pellentesque eget eleifend odio. Aenean nec neque massa. Suspendisse quis lectus orci. Nam finibus neque non volutpat pulvinar. Vivamus quis est vel dui feugiat auctor quis mattis metus.
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                Icon
                            </div>
                            <div class="col-sm-6">
                                Morbi gravida sapien quis massa sagittis blandit. Aenean mattis, turpis vitae consectetur placerat, mi quam tincidunt augue, quis egestas augue mi nec diam. Phasellus faucibus tempus massa in faucibus. Cras porta varius odio, et blandit arcu dignissim sed. Sed tristique gravida pharetra. 
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
                        <div class="testimonial">
                            <p>Praesent fermentum nunc eu justo accumsan, eget ultricies leo luctus. Nullam fringilla.</p>
                            <p class="text-right">- Someone</p>
                        </div>
                        <div class="testimonial">
                            <p>Quisque gravida cursus euismod. Nunc eu ligula malesuada, mattis justo vitae, maximus.</p>
                            <p class="text-right">- Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
