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
				<div class="primary-content">
				<?php 
					if(!perch_get('s')) { $default_album = 'photo-gallery'; } 
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
</body>
</html>