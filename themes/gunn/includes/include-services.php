<div class="container">
    <div class="row">
    <?php
    $args1 = array(
        'post_type' => 'services',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop1 = new WP_Query($args1);
    while ($loop1->have_posts()) : $loop1->the_post();
    
        ?>
      <div class="col-md-4 col-sm-12 wow animated fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.2s">
        <div class="services two">
          <a href="#">
            <div class="service-block service-1 align-middle">
              <div class="img-wrap">
              <?php the_post_thumbnail('dwk_banner', ['class' => 'img-responsive responsive--full', 'title' => 'the_title', 'alt' => 'the_title']); ?>
              </div>
              <div class="category__shadow"></div>
              <div class="service-content">
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt( );?></p>
              </div>
            </div>
          </a>

        </div>
      </div>
      <?php endwhile ;?>
    </div>
  </div>
  </div>