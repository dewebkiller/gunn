<?php 
get_header( '');
/* Template Name: Home */
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
<?php get_template_part('includes/include', 'banner'); ?>  
</section>
<section class="section-services section-padding">
<?php get_template_part('includes/include', 'services'); ?>
</section>
<section class="section-welcome section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="welcome-content">
          <h2>WELCOME TO Gun Mart & Tackle</h2>
          <?php
                    $my_postid = 86;
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                    ?>
          <a class="btn-dwk hvr-float" href="#">Learn More</a>
        </div>

      </div>
      <div class="col-md-6 col-sm-12">
        <div class="welcome-gmap">
          <?php echo $google_map;?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-lg-1 welcome-features">
      <div class="col-md-6 pull-left hvr-float">
        <div class="wf-left-content text-center">
          <img src="<?php echo bloginfo('template_url');?>/images/bullet-1-copyright.webp" />
          <h3>Try our new shooting Rage</h3>
          <p>
          Sign up for our free trial shooting classes!
          </p>
        </div>
      </div>
      <div class="col-md-6 pull-left hvr-float">
        <div class="wf-right-content text-center">
          <img src="<?php echo bloginfo('template_url');?>/images/bullet-2-copyright.webp" />
          <h3>Try our new shooting Rage</h3>
          <p>
          Sign up for our free trial shooting classes!
          </p>
        </div>
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
    </div>
    <?php get_template_part('includes/include', 'whyus'); ?>
  </div>
</section>
<section class="section-testimonials section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-lg-2">
        <div class="title testimonial-title text-center">
          <h2>Clients Reviews</h2>
          <p>Meet the people who are involved in making the shooting training safer and more effective. We work with certified trainers only and guarantee a comfortable practice environment.</p>
      </div> 
    </div>
    <?php get_template_part('includes/include', 'testimonials'); ?>
    
</section>
<section class="section-quote section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-lg-2">
        <div class="title quote-title text-center">
          <h2>Have any question?</h2>
          <p>You may contact us by filling in this form any time you need support and one of our friendly staff members will be in contact within 1-2 business days.</p>
      </div> 
    </div>
    <div class="row">
      <div class="col-md-8 offset-lg-2">
        <div class="quote-form">
          <?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1"]' );?>
        </div>
      </div>
    </div>
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
<section class="section-usedfirearms section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-12">
        <div class="firearms-image">
          <img src="<?php echo bloginfo('template_url');?>/images/used-arms.jpg" />
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-12">
        <div class="firearms-content">
          <div class="title"><h2><?php echo get_field('additional_title', $my_postid);?></h2></div>
          <?php echo get_field('additional_description', $my_postid);?>
          <quote>
            <p>
            <?php echo get_field('additional_quote', $my_postid);?>
            </p>
          </quote>
          <ul>
            <?php
              $link_1 = get_field('additional_buttion_link_1', $my_postid);
              $link_2 = get_field('additional_button_link_2', $my_postid);
            ?>
            <li>
              <a href="<?php echo esc_url( $link_1['url']); ?>"><?php echo get_field('additional_button_text_1', $my_postid);?></a>
            </li>
            <li>
              <a href="<?php echo esc_url( $link_2['url']); ?>"><?php echo get_field('additional_button_text_2', $my_postid);?></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();