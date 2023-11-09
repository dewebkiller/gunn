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
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Gun Mart & Tackle">
  <meta name="keywords" content="Gun Mart & Tackle">
  <meta name="author" content="dewebkiller">
<?php wp_head();?>
</head>

<body <?php body_class();?>>
  <header>
    <section class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="th-content">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-map-marker"></i> <?php echo $address_line_1;?></a>
                </li>
                <li>
                  <a href="<?php the_permalink( '239' );?>"> Job Application</a>
                </li>
                <li>
                  <a href="<?php the_permalink( '233' );?>"> Make a Booking</a>
                </li>
                <li>
                  <a href="<?php the_permalink( '164' );?>"> Rules & Regulations</a>
                </li>
                <li>
                  <a href="<?php the_permalink( '131' );?>"> Contact Us</a>
                </li>
              </ul>

            </div>
          </div>

          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="th-content pull-right">
              <a href=""><i class="fa fa-phone"></i> <?php echo $business_phone;?> </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="btm-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-6">
            <div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="Gun Mart & Tackle"></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-6 business-tagline">
            <div class="col-12 text-end business-tagline-container"><h2><?php echo $business_tagline;?></h2></div>
          </div> 
        </div>
      </div>
    </section>
    <section class="navmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand" href="#">Navigation</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div id="offcanvasExample" class="offcanvas offcanvas-start collapse navbar-collapse">
                                    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navigation</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
                                    <?php
                                      $defaults = array(
                                          'theme_location' => 'primary',
                                          'menu' => '',
                                          'container' => 'ul',
                                          'container_class' => '',
                                          'container_id' => 'offcanvasExample',
                                          'menu_class' => 'nav navbar-nav',
                                          'menu_id' => '',
                                          'echo' => true,
                                          'fallback_cb' => 'wp_page_menu',
                                          'before' => '',
                                          'after' => '',
                                          'link_before' => '',
                                          'link_after' => '',
                                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                          'depth' => 0,
                                          'walker' => ''
                                      );
                                      wp_nav_menu($defaults);
                                ?>
                                </div>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
  </header>