<?php
	include '../perch/runtime.php';
	include '../inc/head.inc.php';
?>
<body>
<?php include '../inc/browsehappy.inc.php'; ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
			    <?php include '../inc/nav.inc.php'; ?>
			    <?php include '../inc/contacts.inc.php'; ?>
			</header>
	        <div class="main">		        
		    <?php include '../inc/address.inc.php'; ?>	
	        	<div class="gallery container">
	        	<h2>Dunowen House <span>Gallery</span></h2>
				<div class="primary-content">
				<?php 
					if(!perch_get('s')) { $default_album = 'maias-first-photos'; } 
					else { $default_album = perch_get('s'); }
					
					// Output the large images
					perch_gallery_album_images($default_album, array(
					   'template' => 'list_image.html'
					));
					// Output the small images used for navigation
					perch_gallery_album_images($default_album, array(
					   'template' => 'nav_image.html',
					));
				?>
		    	</div>
		    	<aside class="gallery sidebar">
			    	<h4>All Albums</h4>
				    <ul class="glist albums">
				    	<?php perch_gallery_albums(array(
				    	    'template' => 'album_list.html',
				    	    'image' => true,
				    	)); ?>
				    </ul>
				</aside>
				</div><!--end container-->
				<?php include '../inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>
	<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
	<script type="text/javascript" charset="utf-8">
	   jQuery(function($){
	       var navlinks = $('ul.slideshow-nav a').get();
	       $('ul.slideshow').cycle({
	           pager:'ul.slideshow-nav', 
	           pagerAnchorBuilder: function(i){return navlinks[i];}
	       });
	   });
	</script>
</body>
</html>
<?php// perch_gallery_images(array( 
//'template'=>'b_static_list_image.html' 
//)); ?>