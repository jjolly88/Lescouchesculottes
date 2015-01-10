<?php
/*

Template Name: Contact

*/
get_header();
?>
<div class="js-masonry container">
	<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>


			<?php endwhile; ?>
</div>

	</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>