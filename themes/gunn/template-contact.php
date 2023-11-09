<?php 
get_header( '');
/* Template Name: Contact */
$business_name = get_field('business_name', 'option');
$business_tagline = get_field('business_tagline', 'option');
$business_time = get_field('business_time', 'option');
$address_line_1 = get_field('address_line_1', 'option');
$address_line_2 = get_field('address_line_2', 'option');
$address_line_3 = get_field('address_line_3', 'option');
$google_map = get_field('google_map', 'option');
$business_phone = get_field('business_phone', 'option');

$business_mobile = get_field('business_mobile', 'option');
$business_email = get_field('business_email', 'option')
?>
<section class="banner-wrapper">
<?php get_template_part('includes/include', 'breadcrumb'); ?>  
</section>
<section class="section-padding section-welcome">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="welcom-content wpcf7">
                    <h2><span class="color-yellow">Send</span> Us A Message</h2>
                    <p>You may contact us by filling in this form any time you need support and one of our friendly staff members will be in contact within 1-2 business days.</p>   
                    <div class="row">
                        <div class="quote-form">
                            <?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]' );?>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php get_sidebar();?> 
            </div>
        </div>
    </div>
</section>



<section class="section-gmap">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-5 col-sm-12 col-xs-12 nopadding">
               <?php echo $google_map;?>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
