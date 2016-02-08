<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * Template Name: About
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id='aboutPage' class='page-section'>
	
	<?php query_posts( "category_name=bio&order=DESC" ); ?>
      
    	<?php while ( have_posts() ) : the_post(); ?>
    	  
    	  <article>
      	  
      	    <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
                   
    	  </article>
    	
    	<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>
    	
</section>

<section id='appearances' name='appearances' class='page-section'>
  
  <?php query_posts( "category_name=speeches-appearances&order=DESC&posts-per-page=3" ); ?>
      
      <h3>Speeches &amp; Appearances</h3>

    	<?php while ( have_posts() ) : the_post(); ?>
    	      	  
    	  <article>
      	  
      	    <h4><?php the_title(); ?></h4>
      	    
      	    <?php if ( has_post_thumbnail() ) { ?>
                
              <?php the_post_thumbnail('medium'); ?>
              <div class='post-content-float'><?php the_content(); ?></div>
              
            <?php } else { ?>
            
              <?php the_content(); ?>
            
            <?php } ?>

              
                   
    	  </article>
    	
    	<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>
    	
    	<a href='speeches-appearances'>More speeches &amp; appearances &raquo;</a>
  
</section>

<section id='publicity-photos' class='page-section'>
  
  <?php query_posts( "category_name=publicity-photos&order=DESC" ); ?>
      
      <h3>Publicity Photos</h3>
      <p>Click download for a hi-res, print-ready file.</p>
    	<?php while ( have_posts() ) : the_post(); ?>
    	  
    	  <li>
    	  
      	  <div class='publicity-thumbnail'>
        	  
        	    <?php the_post_thumbnail('thumbnail');?>
        	           
      	  </div>
  
          <div class='publicity-download'>
             <a class='button' href='<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>' download='<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>'>Download</a>
          </div>
    	  </li>
        
    	<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>
  
</section>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>