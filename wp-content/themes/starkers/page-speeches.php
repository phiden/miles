<?php
/**
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * Template Name: Speeches
 */
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<section id='vaultPage'>
	
	<?php query_posts( "category_name=speeches-appearances&order=DESC" ); ?>
      
    	<?php while ( have_posts() ) : the_post(); ?>
    	  
    	  <article>
      	  
      	    <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
                   
    	  </article>
    	
    	<?php endwhile; ?> 
    	<?php wp_reset_query(); ?>
    	
    	<h3>Invite Miles to speak at your event.</h3>
    	<!-- Change the width and height values to suit you best -->
<div class="typeform-widget" data-url="https://phiden.typeform.com/to/iePdiu" data-text="Miles Speaker Invitation" style="width:100%;height:350px;"></div>
<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
    <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;">Powered by <a href="http://www.typeform.com/?utm_campaign=iePdiu&amp;utm_source=typeform.com-1920034-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a></div>

    	
    	<h3>More coming soon!</h3>

	
</section>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>