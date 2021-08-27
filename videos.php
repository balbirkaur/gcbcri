<?php
/*
Template Name: Videos
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

<section class="ftco-section media-cat">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Archived Sermons</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Messages</a>

                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="container">
                            <div class="row">
                                <?php
                                    /**
                                     * Setup query to show the ‘services’ post type with ‘8’ posts.
                                     * Output the title with an excerpt.
                                     */
                                        $args = array(  
                                            'post_type' => 'sermon-video',
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
                            </div>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="container">
                            <div class="row">
                                <?php
                                    
                                        $args = array(  
                                            'post_type' => 'media-message',
                                            'post_status' => 'publish',
                                           
                                            'orderby' => 'id', 
                                            'order' => 'DESC', 
                                        );

                                        $loop = new WP_Query( $args ); 
                                            
                                        while ( $loop->have_posts() ) : $loop->the_post(); 
                                        
                                        ?>

                                <div class="col-md-12 col-lg-12 ftco-animate">
                                    <div class="pricing-entry bg-light mb-4 pb-4">
                                        <div>
                                            <h3 class="mb-3"><?php print the_title();?></h3>

                                        </div>

                                        <div class="px-2">
                                            <?php print the_content();?>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                   
                            endwhile;

                            wp_reset_postdata();        
                                ?>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>



</section>
<?php get_footer(); ?>