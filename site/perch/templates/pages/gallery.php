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
				<div class="gallery">
					<?php perch_content('Slideshow'); ?>	
				</div><!--end gallery-->	
				<div class="container">
				
				    <ul class="glist albumdisplay">
				    
				    <?php 
				        perch_gallery_albums(array(
				            'template'=>'a_album-image.html',
				            'image'=>true
				        )); 
				    ?>
				    </ul>
				</div><!--end container-->
				<nav class="sidebar">
					<h2>Albums</h2>
				    <ul class="glist albums">
				    	<?php perch_gallery_albums(); ?>
				    </ul>
				</nav>
				<?php include 'inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>