<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xian_Hong_Theme
 */

?>


<?php wp_footer(); ?>

<footer id="footer" class="dark">
    <div class="container">
        <div class="row">
        <div class="col-md-5 ml-auto">
            <h4>Find me on:</h4>
            <div class="row">
            <div class="col-sm-6">
            <ul class="social-links">
                <li><i class="fab fa-weixin"></i> Weixin</li>
                <li><i class="fab fa-facebook-square"></i> <a class="xh-contact" href="https://www.facebook.com/xianhong.zheng.9">Facebook</a></li>
                <li><i class="fab fa-instagram"></i> Instagram</li>
            </ul>
            </div>
            <div class="col-sm-6">
            <address class="mb-0">
                <strong>Email:</strong><br>
                xianhong.zheng@gmail.com<br>
                <strong>Telephone:</strong><br>
                (514) 608-5818
            </address> 
            </div>
            </div>
        </div>
        </div>
    </div>
</footer>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory')?>/script.js"></script>

</body>
</html>
