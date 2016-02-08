
	<?php wp_footer(); ?>
	</body>
	
	<script src="https://cdn.rawgit.com/TimPietrusky/background-clip-text-polyfill/master/background-clip-text-polyfill.js"></script>
	
	<script>
  
    var element = document.querySelector('.header-text'); 

    /*
     * Call the polyfill
     *
     * patternID : the unique ID of the SVG pattern
     * patternURL : the URL to the background-image
     * class : the css-class applied to the SVG
     */
    element.backgroundClipPolyfill({
      'patternID' : 'mypattern',
      'patternURL' : '/_miles/wp-content/themes/starkers/header.jpg',
      'class': 'header-text'
    });
    
  </script>
	
	<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3384895-13']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>


</html>