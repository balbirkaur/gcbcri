<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
<section class="page-top-section">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12 page-title"><?php the_title(); ?></div>
        </div>
    </div>
</section>
<?php 
if( get_field('header_image') ) {
  
?>
<section class="ftco-animate text-center"><img class="img-fluid" src=" <?php echo get_field('header_image');?>">
</section>
<?php }
?>
<?php 
if( get_field('sub_content') ) {
  
?>
<section class="page-subcontent-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sub-content ftco-animate"><?php the_field('sub_content');?></div>
        </div>

    </div>

</section>
<?php }
?>

<section class="ftco-section">
			
	
<div class="container">
<div class="row">
<?php
/**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
    $args = array(  
        'post_type' => 'sermon-gallery',
        'post_status' => 'publish',
        'posts_per_page' => 9, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
       
       ?>

<div class="col-md-4 col-lg-4 ftco-animate">
        		<div class="pricing-entry bg-light mb-4 pb-4 text-center">
        			<div>
	        			<h3 class="mb-3"><?php print the_title();?></h3>
	        		
	        		</div>
	        	
        			<div class="px-2">
                    <?php print the_content();?>
        			</div>
        			<!--<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take</a></p>-->
        		</div>
        	</div>
       
                <?php
             /* preg_match("#(\d+)/$#", 'https://www.facebook.com/202033509827326/videos/2888749381397451', $vid);
                echo $vid[1];*/
    endwhile;

    wp_reset_postdata(); 
    ?>
    </div> </div>
    </section>
<?php get_footer(); ?>