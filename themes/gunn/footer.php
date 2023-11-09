<?php
$business_name = get_field('business_name', 'option');
$business_tagline = get_field('business_tagline', 'option');
$business_time = get_field('business_time', 'option');
$address_line_1 = get_field('address_line_1', 'option');
$address_line_2 = get_field('address_line_2', 'option');
$address_line_3 = get_field('address_line_3', 'option');
$google_map = get_field('google_map', 'option');
$business_phone = get_field('business_phone', 'option');

$business_mobile = get_field('business_mobile', 'option');
$business_email = get_field('business_email', 'option');
$facebook = get_field('business_facebook', 'option');
$twitter = get_field('business_twitter', 'option');
$instagram = get_field('business_instagram', 'option');
$youtube = get_field('business_youtube', 'option');
?>
<footer class="section-padding">
    <div class="container">
        <!-- Three column Footer -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <img src="<?php echo bloginfo('template_url');?>/images/logo.png" class="footer-logo" alt="Gun Mart & Tackle" />
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h3>Opening Hours</h3>
                    <p>Opening hours differ between stores. Click on your relevant store to see its specific opening times.</p>
                    
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 offset-lg-1">
                <div class="footer-widget">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="<?php the_permalink('111');?>" class="hvr-forward"><i class="fa fa-long-arrow-right"></i> About</a></li>
                        <li><a href="<?php the_permalink('131');?>" class="hvr-forward"><i class="fa fa-long-arrow-right"></i> Contact</a></li>
                        <li><a href="<?php the_permalink('3');?>" class="hvr-forward"><i class="fa fa-long-arrow-right"></i> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h3>Get Connected</h3>
                    <ul class="footer-social">
                        <li><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                        <li><a href="<?php echo $youtube;?>" target="_blank"><i class="fa fa-twitter"></i>Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="btm-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?>. <span>Gun Mart & Tackle.</span> All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="powered">
                    <a href="https://murphystechnology.com.au" target="_blank" title="Murphys Technology"><img src="<?php echo bloginfo('template_url');?>/images/powered.png" alt="Murphys Technology" /></a>
                </div>
                <a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<div class="footer-button">
    <div class="container">
        <div class="row d-block">
            <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                <ul class="footer-bar">
                    <li><a href="<?php echo home_url();?>"><i class="fa fa-home"></i><br />Home</a></li>
                    <li><a href="tel:<?php echo $business_phone;?>"><i class="fa fa-phone"></i><br />Phone</a></li>
                    <li><a href="sms:<?php echo $business_phone;?>"><i class="fa fa-comment-o"></i><br />SMS</a></li>
                    <li><a href="mailto:<?php echo $business_email;?>"><i class="fa fa-envelope"></i><br />Email</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php wp_footer( );?>
</body>
</html>
