<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>');
$(window).load(function() {
//	if ($(window).width() > 480) {
		$.getScript('/js/min/jquery.flexslider-ck.js', function(data, textStatus){
		  		$('.flexslider').flexslider({
		  		  animation: "fade",
		  		  slideshow: true,
		  		  slideshowSpeed: 5000,
		  		  animationSpeed: 800
		  		});
		});
//	}
});
</script>
<?php 
// GALLERY JS
if (strpos($_SERVER['REQUEST_URI'], '/gallery/')!==false) {
?>
<script type="text/javascript" src="../js/min/jquery.cycle.all-min.js"></script>
<script type="text/javascript">
   jQuery(function($){
       var navlinks = $('ul.slideshow-nav a').get();
       $('ul.slideshow').cycle({
           pager:'ul.slideshow-nav', 
           pagerAnchorBuilder: function(i){return navlinks[i];}
       });
   });
</script>
<?php	
}
?>
<!--<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-52648965-1');ga('send','pageview');
</script>-->
