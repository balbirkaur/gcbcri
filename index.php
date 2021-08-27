<?php get_header(); ?>
<section class="page-top-section">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12 page-title">Latest News</div>
        </div>
    </div>
</section>
<?php 
if( get_field('header_image') ) {
  
?>
<section class="ftco-animate"><img class="img-fluid" src=" <?php echo get_field('header_image');?>">
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
wp_reset_query();
?>
<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
	  
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
			<div class="text bg-white p-4">
                <h3 class="heading">
		    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		    <?php the_post_thumbnail(); ?>
			<div class="d-flex align-items-center mt-4"> <?php the_excerpt(); ?></div>
		    <p class="meta"><?php the_time('F j, Y'); ?> in <?php the_category(', '); ?> by <?php the_author_posts_link() ?></p>
		    <p class="meta"><?php comments_popup_link('No comments yet', '1 comment', '% comments', '', 'Comments are disabled for this post'); ?></p>	    
		</div></div></div>
		<!--/box-->   
	    <?php endwhile; else: ?>
		<h2>404 - Not Found</h2>
		<p>The page you are looking for is not here.</p>					 
	    <?php endif; ?>
	    <div id="page-nav">
		<?php next_posts_link('&laquo; Previous Entries') ?>
		<?php previous_posts_link('Next Entries &raquo;') ?>
	    </div>
	</div>
    </div>
    <div id="content-right"><?php get_sidebar(''); ?></div>
</div>
<!--content end-->
<!--Popup window-->
<?php //include(TEMPLATEPATH.'/popup.php') ?>
</div>
<!--main end-->
</div>
<!--wrapper end-->
<div class="clear"></div>		
<?php get_footer(); ?>