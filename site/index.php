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
				    <h1>Example A: gallery</h1>
				
				    <p>This demonstrates a simple gallery listing. Albums are listed in the navigation and also below using the optional ability to display a thumbnail for the album. 
				    Clicking on any album takes you to the page for that album where thumbnails are displayed. Click a thumbnail to view a larger image.</p>
				    <ul class="glist albumdisplay">
				    <?php 
				        perch_gallery_albums(array(
				            'template'=>'a_album-image.html',
				            'image'=>true
				        )); 
				    ?>
				    </ul>
				</div>
				<nav class="sidebar">
					<h2>Albums</h2>
				    <ul class="glist albums">
				    	<?php perch_gallery_albums(); ?>
				    </ul>
				</nav>
				</div><!--end gallery-->
				<?php include 'inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>