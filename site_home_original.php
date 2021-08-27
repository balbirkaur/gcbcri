<?php
/*
Template Name: Site_Home
*/
?>

<?php get_header(); ?>
<?php $cat_tab_1 = get_option('lp_tab_cat_1');  ?>
<?php $cat_tab_2 = get_option('lp_tab_cat_2');  ?>
<?php $cat_tab_3 = get_option('lp_tab_cat_3');  ?>
<?php $post_number = get_option('lp_post_num');  ?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(<?php echo get_option('lp_slide_img_1'); ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4"><?php echo get_option('lp_slide_capt_1'); ?></h1>
                    <h2 class="mb-4"><?php echo get_option('lp_slide_capt_12'); ?></h2>
                    <p><a title="<?php echo get_option('lp_slide_capt_1'); ?>"
                            href="<?php echo get_option('lp_slide_link_1'); ?>"
                            class="btn btn-secondary px-4 py-3 mt-3">JOIN OUR LIVE SERMON</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php
if(get_option('lp_slide_img_2')){
    ?>
    <div class="slider-item" style="background-image:url(<?php echo get_option('lp_slide_img_2'); ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4"><?php echo get_option('lp_slide_capt_2'); ?></h1>
                    <h2 class="mb-4"><?php echo get_option('lp_slide_capt_22'); ?></h2>
                    <p><a title="<?php echo get_option('lp_slide_capt_2'); ?>"
                            href="<?php echo get_option('lp_slide_link_2'); ?>"
                            class="btn btn-secondary px-4 py-3 mt-3">JOIN OUR LIVE SERMON</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php }
 
if(get_option('lp_slide_img_3')){
    ?>
    <div class="slider-item" style="background-image:url(<?php echo get_option('lp_slide_img_3'); ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4"><?php echo get_option('lp_slide_capt_3'); ?></h1>
                    <h2 class="mb-4"><?php echo get_option('lp_slide_capt_32'); ?></h2>
                    <p><a title="<?php echo get_option('lp_slide_capt_3'); ?>"
                            href="<?php echo get_option('lp_slide_link_3'); ?>"
                            class="btn btn-secondary px-4 py-3 mt-3">JOIN OUR LIVE SERMON</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php }
 
if(get_option('lp_slide_img_4')){
    ?>
    <div class="slider-item" style="background-image:url(<?php echo get_option('lp_slide_img_4'); ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4"><?php echo get_option('lp_slide_capt_4'); ?></h1>
                    <h2 class="mb-4"><?php echo get_option('lp_slide_capt_42'); ?></h2>
                    <p><a title="<?php echo get_option('lp_slide_capt_4'); ?>"
                            href="<?php echo get_option('lp_slide_link_4'); ?>"
                            class="btn btn-secondary px-4 py-3 mt-3">JOIN OUR LIVE SERMON</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php }
 
    ?>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 d-flex services align-self-stretch pb-4  ftco-animate  bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon  justify-content-center align-items-center">
                        <?php echo get_option('lp_event_date'); ?>
                        <!--29th<br><span>June 2021</span>-->
                    </div>
                    <div class="media-body p-2 mt-3 text-left">
                        <h3 class="heading"> <?php echo get_option('lp_event_day_time'); ?>
                            <!--    Monday, 11:00 Am - Tuesday, 5:00 Pm -->
                        </h3>
                        <p> <?php echo get_option('lp_event_one_liner'); ?>
                            <!--Sharing Our Faith & Love To Children-->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 d-flex services align-self-stretch pb-4 px-4  ftco-animate bg-primary">
                <div class="media block-6 d-block text-left d-flex">

                    <div class="media-body p-2 mt-3 ">

                        <p><?php echo get_option('lp_event_description'); ?><?php 
                        echo get_option('lp_tab_post');
                        $mypost = get_page_by_title(  get_option('lp_tab_post'), '', 'post' );
                        
                        ?>
                        </p>
                    </div>
                    <div class="p-2 mt-3">
                        <!--<a target="_blank" href="<?php echo get_option('lp_event_link'); ?>"
                            rel="bookmark" class="btn btn-secondary read-more">Read
                            more</a>-->
                        <a href="<?php echo get_permalink($mypost->ID); ?>" rel="bookmark"
                            class="btn btn-secondary read-more">Read
                            more</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftc-no-pb ">
    <div class="container">
        <div class="row">

            <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                <h2 class="mb-4 text-center home-title">Welcome to Grace Church</h2>
            </div>
            <?php
            if ( has_post_thumbnail() ) {
                ?>
            <div class=" col-md-6 col-lg-6 ftco-animate"><img class="img-fluid"
                    src="<?php bloginfo('stylesheet_directory'); ?>/images/home.jpg">

                <br>
                <?php echo get_field('content_left');?>
            </div>
            <div class="col-md-6 col-lg-6 about-text ftco-animate">
                <p> <?php the_content();?></p>
            </div>
            <?php
            }
            else{
                ?>
            <div class="col-md-6 col-lg-6  ftco-animate"><img class="img-fluid"
                    src="<?php bloginfo('stylesheet_directory'); ?>/images/home.jpg">
                <br>
                <div class="text-center content-left"> <?php echo get_field('content_left');?></div>
            </div>
            <div class="col-md-6 col-lg-6 about-text ftco-animate">
                <p> <?php the_content();?></p>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>