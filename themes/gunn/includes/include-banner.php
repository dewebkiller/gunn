<div class="owl-carousel owl-banner owl-theme">
<?php
    $args1 = array(
        'post_type' => 'banner',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC');
    $loop1 = new WP_Query($args1);
    while ($loop1->have_posts()) : $loop1->the_post();
    
        ?>
    <div class="item">
      <div class="banneroverlay"></div>
      <?php the_post_thumbnail('dwk_banner', ['class' => 'img-responsive responsive--full', 'title' => 'the_title', 'alt' => 'the_title']); ?> 
      <div class="banner-caption">
        <h2><?php echo get_field('banner_title');?></h2>
        <?php echo get_field('banner_description');?>
        <?php 
        $link1 = get_field('button_link_1');
        $link2 = get_field('button_link_2');
        ?>
        <ul>
          <li><a href="<?php echo esc_url( $link1['url'] ); ?>" class="dwk-btn hvr-float"><?php echo get_field('button_text_1');?></a></li>
          <li><a href="<?php echo esc_url( $link2['url'] ); ?>" class="dwk-btn hvr-float"><?php echo get_field('button_text_2');?></a></li>
        </ul>
      </div>
    </div>
    <?php endwhile ;?>
  </div>