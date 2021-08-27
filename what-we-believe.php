<?php
/*
Template Name: What We Believe
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
<section class=" page-content-section">
    <div class="container">
        <div class="row">
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
            <div class="col-md-12 page-believe"><?php the_content();?>
            </div>
            <div class="col-md-6 resource_list"><?php the_field('resource_list_1');?>
            </div>
            <div class="col-md-6 resource_list"><?php the_field('resource_list_2');?>
            </div>
            <div class="col-md-12 ftco-animate">
                <?php the_field('footer_text');?>

            </div>
        </div>
    </div>


</section>
<?php get_footer(); ?>