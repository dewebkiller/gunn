<?php
/* Template Name: Page with sidebar */
get_header();
?>
<section class="banner-wrapper">
  <?php get_template_part('includes/include', 'breadcrumb'); ?>
</section>
<section class="page-wrapper section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
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
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</section>
<?php get_footer();