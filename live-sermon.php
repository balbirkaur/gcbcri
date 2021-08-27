<?php
/*
Template Name: Live Sermon
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
            <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-12 col-lg-12 ftco-animate">
                <div class="pricing-entry bg-light mb-4  text-center">
                    <div class="px-2">
                        <?php 
                    if(get_field('live_video')){
echo get_field('live_video');
                    }
                    else{
                    print the_content();}?>
                    </div>

                </div>
            </div>

            <?php
             /* preg_match("#(\d+)/$#", 'https://www.facebook.com/202033509827326/videos/2888749381397451', $vid);
                echo $vid[1];*/
    endwhile;

    ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>