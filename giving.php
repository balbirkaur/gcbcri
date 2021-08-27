<?php
/*
Template Name: Online Giving
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

<section class="page-content-section">


    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>

            <div class="col-md-12 col-lg-12 ftco-animate">
                <div class="pricing-entry  mb-4  text-center">


                    <div class="px-2">
                        <?php 
                    if(get_field('live_video')){ echo get_field('live_video');
                    }
                    else{
                    print the_content();
                    }?>
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
<section class="ftco-section blue-bck">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h3 class="mb-0">ONLINE GIVING</h3>
                <div id="give-form-724-wrap" class="d-flex justify-content-center give-form-wrap give-display-modal">
                    <!--          <form id="give-form-724" class="d-flex justify-content-center give-form give-form_724"
                        method="post">
                        <input type="hidden" name="give-form-id" value="724">
                        <input type="hidden" name="give-form-title" value="Donation form 6">
                        <input type="hidden" name="give-current-url" value="">
                        <input type="hidden" name="give-form-url" value="">
                        <div class="give-total-wrap">
                            <div class="give-donation-amount form-row-wide">
                                <span class="give-currency-symbol give-currency-position-before">$</span>



                                <input class="give-text-input" name="give-amount" type="number" placeholder=""
                                    value="25.00" min="25" required="" autocomplete="off">
                                <p class="give-loading-text give-updating-price-loader" style="display: none;">
                                    <span class="give-loading-animation"></span> Updating Amount <span
                                        class="elipsis">.</span><span class="elipsis">.</span><span
                                        class="elipsis">.</span>
                                </p>
                            </div>
                        </div>
                        <button type="button" class="give-btn give-btn-modal">Donate</button>
                    </form>-->
                    <form class="d-flex justify-content-center give-form give-form_724"
                        action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd"
                            type="hidden" value="_s-xclick">
                        <input name="hosted_button_id" type="hidden" value="JECFCRLZGWAUY">

                        <div class="give-total-wrap">
                            <div class="give-donation-amount form-row-wide">
                                <input title="PayPal - The safer, easier way to pay online!"
                                    alt="Donate with PayPal button" name="submit"
                                    src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image">
                                <img loading="lazy" src="https://www.paypal.com/en_US/i/scr/pixel.gif" alt="" width="1"
                                    height="1" border="0">

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer('giving'); ?>