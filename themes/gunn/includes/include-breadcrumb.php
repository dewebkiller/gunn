<?php
$breadcrumb_image = get_field('breadcrumb_image');
$size = 'full';
?>
<section class="section-breadcrumb" <?php  if($breadcrumb_image) { ?>  style="background: url(<?php echo $breadcrumb_image['url'];?>)" <?php }?>>
    <div class="container">
        <div class="row">
            <div class="col-12 breadcrumb-content text-center">
                <h2><?php the_title();?></h2>
                <p><?php echo get_field('breadcrumb_description');?></p>
            </div>
        </div>
    </div>
</section>