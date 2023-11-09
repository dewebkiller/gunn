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
$business_email = get_field('business_email', 'option')
?>
<div class="contact-details">
  <div class="contact-box">
    <h3 class="widget-title"><span class="color-yellow">Contact</span> Details</h3>
    <div class="textwidget">
      <p><strong><?php echo $business_name;?></strong></p>
      <p><?php echo $address_line_1;?></p>
      <p><?php echo $address_line_2;?></p>
      <hr>
      <p><strong>Email</strong></p>
      <p><a href="mailto:<?php echo $business_email;?>"><?php echo $business_email;?></a></p>
      <p><strong>Gun Mart</strong></p>
      <p>(08) 9274 5699</p>
      <hr>
      <p><strong>Tackle Shop</strong></p>
      <p>(08) 9274 5699</p>
      <hr>
      <p><strong>The Range</strong></p>
      <p>(08) 9274 5494</p>
    </div>
  </div>
</div>