<?php
	include 'perch/runtime.php';
	include 'inc/head.inc.php';
?>
<body>
<?php include 'inc/browsehappy.inc.php'; ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
			    <?php include 'inc/nav.inc.php'; ?>
			    <?php include 'inc/contacts.inc.php'; ?>
			</header>
	        <div class="main">		        
		    <?php include 'inc/address.inc.php'; ?>	
	        	<div class="container">
			        
			        <?php perch_content('Content'); ?>
			       
			       <?php perch_gallery_images( array( 
			       'template'=>'static_image.html',
			       'count' =>1
			       )); ?>	
	
			       <?php
			       perch_gallery_adjacent_images( array(
			          'template'=>'adjacent_images.html' 
			       ));
			       ?>	
			      	       			        
				</div><!--end container-->
				<?php include 'inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>
<?php// perch_gallery_images(array( 
//'template'=>'b_static_list_image.html' 
//)); ?>