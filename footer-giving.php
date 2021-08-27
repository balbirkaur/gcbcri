<section class="ftco-intro">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-7"
                style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/slider-bible-bg.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="owl-carousel bible-slider owl-loaded">
                    <?php if(get_option('lp_bible_note_1')) {?>
                    <div class="owl-item"><?php echo get_option('lp_bible_note_1');?></div>
                    <?php
               }
               ?>
                    <?php if(get_option('lp_bible_note_2')) {?>
                    <div class="owl-item"><?php echo get_option('lp_bible_note_2');?></div>
                    <?php
               }
               ?>
                    <?php if(get_option('lp_bible_note_3')) {?>
                    <div class="owl-item"><?php echo get_option('lp_bible_note_3');?></div>
                    <?php
               }
               ?>

                </div>
            </div>
            <div class="col-md-6 p-7 d-flex align-items-center"
                style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/slider-twitter-bg.jpg);"
                data-stellar-background-ratio="0.5">
                <?php echo do_shortcode("[rotatingtweets screen_name='GCBaptistChurch']");?>
                <!-- <div class="owl-carousel bible-slider owl-loaded">

                    <div class="owl-item">Then, taking the five loaves and the two fish and looking up to heaven, he
                        said the blessing, broke the…</div>
                    <div class="owl-item">Then, taking the five loaves and the two fish and looking up to heaven, he
                        said the blessing, broke the…</div>
                    <div class="owl-item">Then, taking the five loaves and the two fish and looking up to heaven, he
                        said the blessing, broke the…</div>

                </div>-->
            </div>
        </div>
</section>
<?php
     // Define our WP Query Parameters 
     $query_options = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3, 
        'orderby' => 'id', 
        'order' => 'DESC', 
     );
     $the_query = new WP_Query( $query_options ); 
     if ( have_posts() ) {
     
?>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate blog-home">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/church.jpg">
                <h4 class="mb-4">Latest News</h2>
                    <p>Experience God's Presence</p>
            </div>
        </div>
        <div class="row">
            <?php  while ($the_query -> have_posts()) : $the_query -> the_post(); 


if ( has_post_thumbnail(get_the_ID())) {
    
     $thumb_b_full = wp_get_attachment_image_src( get_post_thumbnail_id( $the_query->ID ), 'thumbnail' );
      $thumb_b = $thumb_b_full[0];
}
else {
    $thumb_b = get_template_directory_uri()."/images/image_1.jpg";
}
?>


            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="<?php echo get_permalink(get_the_ID());?>" class="block-20 d-flex align-items-end"
                        style="background-image: url('<?php echo $thumb_b;?>');">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">January</span>
                            <span class="yr">2019</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a
                                href="<?php echo get_the_permalink(get_the_ID());?>"><?php the_title(); ?></a></h3>
                        <p>
                            <?php the_excerpt(__('(more…)')); ?></p>

                    </div>
                </div>
            </div>


            <?php 
endwhile;
wp_reset_postdata();
?>


        </div>
    </div>
</section>
<?php
     }
if(get_option('lp_footer_note')){
    ?>
<section class="ftco-section black-bck">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12  heading-section ftco-animate">
                <h3 class="mb-0"><?php echo get_option('lp_footer_note');?></h3>
                <div id="give-form-724-wrap" class="d-flex justify-content-center give-form-wrap give-display-modal">
                    <?php
                if(get_option('lp_footer_note_link')){
                    ?>
                    <button type="button" class="give-btn give-btn-modal"><a target="_blank"
                            href="<?php echo get_option('lp_footer_note_link');?>">Learn More</a></button>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
}
?>

<section class="footer">
    <div class="container">
        <div class="row row-30">
            <div class="col-md-4 col-xl-4 col-12 pb-md-0 pb-5 text-md-left text-center">
                <div class="pr-xl-4">
                    <h5><?php bloginfo('name'); ?></h5>
                    <?php echo do_shortcode('[company_address]'); ?>
                    Phone: <?php echo do_shortcode('[company_phone]'); ?>
                </div>
            </div>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?><?php endif; ?>
            <!-- <div class="col-md-2 col-xl-2">
                <div class="pr-xl-4">
          			
                    <h5>LINKS</h5>
                    <ul>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-xl-2">
                <div class="pr-xl-4">
                    <h5>LINKS</h5>
                    <ul>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                        <li><a>aabc</a></li>
                    </ul>
                </div>
            </div>-->
            <div class="col-md-4 col-xl-4 col-12 pb-md-0 pb-5 text-md-left text-center ">
                <div class="pr-xl-4 ">
                    <h5>NEWSLETTER</h5>
                    Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                    <div class="pt-2 newsletter-center"> <?php echo do_shortcode('[mailpoet_form id="2"]');?> </div>
                </div>
            </div>
        </div>
    </div>

</section>
<footer class="tm-footer-box tm-none-bg">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <?php echo get_option('lp_footer_copyrights');?>
            </div>
            <div class="col-md-6 col-xl-6 d-flex justify-content-end">
                <ul class="social-icons">
                    <?php if(get_option('lp_facebook_link')){
                    ?><li><a href="<?php echo get_option('lp_facebook_link'); ?>" target="_blank"><i
                                class="icon-facebook"></i></a>
                    </li>
                    <?php
                }if(get_option('lp_twitter_link')){
                    ?><li><a href="<?php echo get_option('lp_twitter_link'); ?>" target="_blank"><i
                                class="icon-twitter"></i></a>
                    </li>
                    <?php
                }
                    ?>


                </ul>
            </div>

        </div>
    </div>
    </div>
    <!-- end full width -->
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>

<?php echo stripslashes(get_option('lp_tracking_code'))?>
<?php wp_footer(); ?>
</body>

</html>