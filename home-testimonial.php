<!--coarousel-->
<div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
 <div class="carousel-inner testimonial">
<!--query testimonial unit number 1 (latest) only-->
 <?php
 $args = array(
 'post_type' => 'testimonial',
 'posts_per_page' => 1
 );
 $loop = new WP_Query( $args );
 if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
 $data = get_post_meta( $loop->post->ID, 'testimonial', true );
 { 
 ?>
 <div class="item active">
 <div class="unit" style="background-image: url( 
 <?php
 $thumb_id = get_post_thumbnail_id();
 $thumb_url = wp_get_attachment_image_src($thumb_id, true);
 echo $thumb_url[0];
 ?>
 );">
 <p style="color:#fff; font-style: italic;"><?php echo get_the_content(); ?></p>

 
 </div>
 </div>
 <?php 
 }
 endwhile; 
 endif; 
 wp_reset_postdata();
 ?> 
<!--query ends-->
<!--query 10 testimonial units except first one i.e. latest-->
 <?php
 $args = array( 
 'post_type' => 'testimonial', 
 'posts_per_page' => 10,
 'offset' => 1 
 );
 $loop = new WP_Query( $args );
 if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
 $data = get_post_meta( $loop->post->ID, 'testimonial', true );
 { 
 ?>
 <div class="item">
 <div class="unit" style="background-image: url(
 <?php
 $thumb_id = get_post_thumbnail_id();
 $thumb_url = wp_get_attachment_image_src($thumb_id, true);
 echo $thumb_url[0];
 ?>
 );">
 <p style="color:#fff; font-style: italic;"><?php echo get_the_content(); ?></p>
 <div></div>
 
 </div>
 </div>
 <?php 
 }
 endwhile; 
 endif; 
 wp_reset_postdata();
 ?>
<!--query ends-->
 </div>
 <!-- Controls -->
 <a class="left carousel-control" href="#carousel-testimonial" data-slide="prev">
 <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
 </a>
 <a class="right carousel-control" href="#carousel-testimonial" data-slide="next">
 <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
 </a>
</div>
<!--carousel end-->
<!--script to activate the bootstrap -->
<script>
 $('.carousel').carousel();
</script>