<div class="row">
<?php
    $args1 = array(
        'post_type' => 'features',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop1 = new WP_Query($args1);
    while ($loop1->have_posts()) : $loop1->the_post();
    $svg = get_field('svg_code');
        ?>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="features-wrapper">
          <div class="features-icon">
            <?php echo $svg;?>
          </div>
          <h4><?php the_title();?></h4>
          <?php the_content( );?>
        </div>
      </div>
      <?php endwhile;?>
      
    </div>