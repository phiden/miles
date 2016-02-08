<?php
/**
 * The template for displaying HOME.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section class='row twelve columns'>
  
  <div class='twelve columns' id='left-col'>
    
    <div id='home-blog'>
      
      <?php query_posts( "category_name=youTube,blog&order=DESC" ); ?>
      
    	<?php while ( have_posts() ) : the_post(); ?>
    	      	  
    	  <article>
      	  
      	  <?php if(!in_category("Twitter") && !in_category("Instagram")) { ?> 
      	  
      	  
      	    <h3><a href=<?php the_permalink();?>><?php the_title(); ?></a></h3>
            
            <?php if ( has_post_thumbnail() ) { ?>
              
              <?php the_post_thumbnail('medium'); ?>
              <div class='post-content-float'>
                
                <?php the_excerpt(); ?>
                <a class='read-more' href='<?php the_permalink();?>'>Continue reading <?php the_title();?> &raquo;</a>
            
              </div>
              
            <?php } else { ?>
            
              <?php the_excerpt(); ?>
              <a class='read-more' href='<?php the_permalink();?>'>Continue reading <?php the_title();?> &raquo;</a>
            
            <?php } ?>
            
          <?php } else { ?>
          
             <h3><a href=<?php the_permalink();?>><?php the_title(); ?></a></h3>
             <?php the_content(); ?>
          
          <?php } ?>
          
                     
    	  </article>
    	
    	<?php endwhile; ?> <!-- close youTube loop -->
    	<?php wp_reset_query(); ?>
    	
    </div>
    
  </div> <!-- closes left-col -->
  
</section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>