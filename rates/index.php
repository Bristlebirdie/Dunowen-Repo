<?php
	include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php');
	include($_SERVER['DOCUMENT_ROOT'].'/inc/head.inc.php');
?>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/browsehappy.inc.php'); ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
			    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/nav.inc.php'); ?>
			    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/contacts.inc.php'); ?>
			</header>
	        <div class="main">		        
		    <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/address.inc.php'); ?>
				<div class="gallery">
       			<?php perch_content('Slideshow'); ?>				
				</div><!--end gallery-->	
	        	<div class="container">
					<?php perch_content('Page Introduction'); ?>
					<div class="calendar-container">
					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=7&amp;bgcolor=%23ffffff&amp;src=dunowenguesthouse%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FDublin" style=" border-width:0 " width="100%" height="350" frameborder="0" scrolling="no"></iframe>
					</div>
					<?php
						perch_content('Self Catering Table');			        
					    perch_content('Heading');
					    perch_content_custom('Products', array(
					     'template'   => 'bandb.html',
					     'multiple'    => true
					    ));
					?>
			        <?php perch_content('Additional Content'); ?>
				</div><!--end container-->
				<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/news.inc.php'); ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.inc.php'); ?>	  	   
	</div><!--end wrapper--> 
	<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/scripts.inc.php'); ?>	    
</body>
</html>