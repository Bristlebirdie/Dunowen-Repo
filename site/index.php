
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
					<h2>You don't just stay at Dunowen House, <br><span>you experience it.</span></h2>
					<?php perch_content('Slideshow'); ?>	
				</div><!--end gallery-->	
	        	<div class="container">
			        <?php perch_content('Content'); ?>
			        <?php perch_content('Additional Content'); ?>
				</div><!--end container-->
				<?php include 'inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>