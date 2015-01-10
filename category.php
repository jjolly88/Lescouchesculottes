<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<?php
if( is_user_logged_in()){?>
	<div  class="js-masonry container"
  		data-masonry-options='{ "columnWidth": 2, "itemSelector": ".item" }'>
    		<!--class="js-masonry"data-masonry-options='{ "columnWidth": 0, "itemSelector": ".item" }'-->
   				<?php //query_posts('showposts=15') ?>
					<?php while ( have_posts() ) : the_post(); ?>
   			 			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		<div class="item" id="item-<?php the_ID(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<div align="center">
					<a class="group1" width="1010" height="677" href="<?php echo $url; ?>"><?php the_post_thumbnail(array( 200,200)); ?></a>
          		</div>
				<div class="contentCat"><?php the_content(); ?>
					<p class="publishTime">Publier à <?php echo get_the_modified_time();  ?> par <?php the_author(); ?></p>
				</div>		
		</div>
				<?php endif; ?>
			<?php endwhile; // end of the loop. ?>
		    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>

		<!--<div class="right">
			 <?php get_sidebar('main'); ?>
		</div>-->
	</div>
		
<?php }else{ ?>
<h1>Veuillez vous connecter </h1>
<?php } ?>
<div style="clear:both;"></div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>