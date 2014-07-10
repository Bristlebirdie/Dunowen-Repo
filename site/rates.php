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
	        		<?php perch_content('Page Introduction'); ?>
	        		
	        		<div class="calendar-container">
	        		<iframe src="https://www.google.com/calendar/embed?height=350&amp;wkst=7&amp;bgcolor=%23c0c0c0&amp;src=dunowenguesthouse%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FDublin" style=" border-width:0 " width="500" height="350" frameborder="0" scrolling="no"></iframe>
	        		</div>
	        		<?php perch_content('Self Catering Table'); ?>
			        <?php perch_content('Heading'); ?>
			        <?php
			        perch_content_custom('Products', array(
			         'template'   => 'bandb.html',
			         'multiple'    => true
			        ));
			        ?>
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