<?php 
get_header( '');
/* Template Name: About */
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

<section class="section-welcome section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
      <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                        //
                    } // end while
                } // end if
                ?>
            </div>

      </div>
      
    </div>
    
  </div>
</section>
<section class="section-padding section-counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="counter-content">
                    <i class="fa fa-list"></i>
                    <h2><span class="counter-no color-white">200</span> +</h2>
                    <h4>Members</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="counter-content">
                    <i class="fa fa-smile-o"></i>
                    <h2><span class="counter-no color-white">20</span> +</h2>
                    <h4>Instructors</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="counter-content">
                    <i class="fa fa-users"></i>
                    <h2><span class="counter-no color-white">150</span> +</h2>
                    <h4>Recuring Customers</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-features section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-lg-2">
        <div class="title features-title text-center">
          <h2>Why choose Gun Mart & Tackle</h2>
          <p>We've been providing firearms and accessories to the Midvale community for years. Conveniently loated in Midland DC, we're the number one choice for all things fireamrs/guns and accessories</p>
      </div> 
    </div>
    <?php get_template_part('includes/include', 'whyus'); ?>
  </div>
</section>

<section class="section-brands section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-lg-2">
        <div class="title brands-title text-center">
          <h2>Supporting Brands</h2>
          <p>Take a look at some of our supporting brands.</p>
      </div> 
    </div>
    <?php get_template_part('includes/include', 'brands'); ?>
    
  </div>
</section>

<?php get_footer();