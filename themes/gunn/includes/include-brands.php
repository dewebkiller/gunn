<div class="row">
      <div class="col-md-12">
        <div class="brands-wrapper">
          <div class="owl-carousel owl-brands owl-theme">
          <?php
    $args1 = array(
        'post_type' => 'brands',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop1 = new WP_Query($args1);
    while ($loop1->have_posts()) : $loop1->the_post();
    $svg = get_field('svg_code');
        ?>
            <div class="item">
            <?php the_post_thumbnail('dwk_banner', ['class' => 'img-responsive responsive--full', 'title' => 'the_title', 'alt' => 'the_title']); ?> 
            </div>
            <?php endwhile;?>
        </div>
        </div>
    </div>