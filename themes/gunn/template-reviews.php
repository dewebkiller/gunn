<?php 
get_header( '');
/* Template Name: Reviews */
?>
<section class="banner-wrapper">
<?php get_template_part('includes/include', 'breadcrumb'); ?>  
</section>

<section class="content-wrapper section-padding testimonial-section-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title text-center">
                    <p>Giving our customers reasons to be happy by our trained and experience staffs who are experts and license holder. Let our Clients speak about us for you.</p>
                </div>
            </div>
            <div class="testimonials-block">
            <?php
    $args1 = array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop1 = new WP_Query($args1);
    while ($loop1->have_posts()) : $loop1->the_post();
    $svg = get_field('svg_code');
        ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-left wow animated fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0.1s">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-block">
                            <?php the_content();?>
                            <h3><?php the_title();?></h3>
              <h4><?php echo get_field('testimonials_address');?></h4>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
