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
       			<?php perch_content('Slideshow'); ?>				
	        	<div class="container">
			        <?php perch_content('Content'); ?>
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