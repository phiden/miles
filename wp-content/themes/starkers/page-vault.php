<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * Template Name: Vault
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id='vaultPage'>
	
	<?php query_posts( "category_name=vault,youTube&order=DESC" ); ?>
      
    	<?php while ( have_posts() ) : the_post(); ?>
    	  
    	  <article>
      	  
      	    <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
                   
    	  </article>
    	
    	<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>

	
</section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>