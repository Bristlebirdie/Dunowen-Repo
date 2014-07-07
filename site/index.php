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
		            <h2><?php perch_content('Headline'); ?><br><span><?php perch_content('Tagline'); ?></span></h2>
		        </div><!--end gallery-->
		        
		        <?php perch_content('Content'); ?>
		        
		        <?php include 'inc/news.inc.php'; ?>
           </div> <!--end main-->
           
    	</div> <!--end inner-wrap-->
		 <?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>