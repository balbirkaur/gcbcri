<?php

/* Template Name: Featured Image*/

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
<section class="ftco-animate  text-center"><img class="img-fluid" src=" <?php echo get_field('header_image');?>">
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
<section class=" page-content-section">
    <div class="container">
        <div class="row">
            <?php
            if ( has_post_thumbnail() ) {
                ?>
            <div class="col-md-5 page-content ftco-animate">
                <?php  the_post_thumbnail('full', array('class' => 'img-fluid'));?>
            </div>
            <div class="col-md-7 page-content ftco-animate"><?php the_content();?>
            </div>
            <?php
           
            }
            else {
                ?>

            <div class="col-md-12 page-content ftco-animate"><?php the_content();?>
            </div>
            <?php
            }
            ?>

            <div class="col-md-12 d-flex justify-content-end">
                <a class="btn btn-live" href="<?php echo get_permalink('786');?>" role="button">JOIN OUR LIVE SERMON</a>
            </div>
            <?php
			if( get_field('quote') ) {?>
            <div class="col-md-12">
                <div class="page-quote ftco-animate"><?php the_field('quote');?>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>


</section>
<?php get_footer(); ?>