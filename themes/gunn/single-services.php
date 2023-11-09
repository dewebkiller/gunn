<?php
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
        <h3>Take a look at some of our supporting brands.</h3>
        <ul class="brands-ul"><?php  
				// Define the query
				$args = array(
					'post_type' => 'brands',
					'posts_per_page' => 20,
					'brands_type' => $post->post_name,					
					'order' => 'ASC'
				);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <div class="supporting-brands">
              <?php echo the_post_thumbnail();?>
            </div>
          </li>
          <?php endwhile;?>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <?php get_sidebar();?>
      </div>
    </div>
  </div>
</section>
<?php get_footer();