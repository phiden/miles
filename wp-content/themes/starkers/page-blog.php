<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * Template Name: Blog
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class='row'>
	<section id='blog-page-main' class='eight columns'>
		
		<?php query_posts( "category_name=blog" ); ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
		
				<h3><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h3>
				
				<?php the_content(); ?>
			
			<?php endwhile; ?> <!-- close youTube loop -->
		
		
	</section>
	
	<section id='blog-page-sidebar' class='three columns u-pull-right'>
		
		<?php get_sidebar(); ?>
	
	</section>
	
</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>