<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>');
$(window).load(function() {
//	if ($(window).width() > 480) {
		$.getScript('js/jquery.flexslider.js', function(data, textStatus){
		  		$('.flexslider').flexslider();
		});
//	}
});
</script>