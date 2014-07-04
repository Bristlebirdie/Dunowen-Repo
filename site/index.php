<?php
	include 'perch/runtime.php';
	include 'inc/head.inc.php';
?>

<body>
	<!--[if lt IE 7]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
		        <a href="index.html" title="Dunowen House"><h1>Dunowen House</h1></a>
		        <a id="jump-top" href="#menu" class="menu-link ">&#9776; Menu</a>
		        <?php include 'inc/nav.inc.php'; ?>
				<?php include 'inc/contacts.inc.php'; ?>
			</header>
	        
	        <div class="main">   
		        <?php include 'inc/address.inc.php'; ?>
	        	<div class="gallery">
		            <?php perch_content('Main picture'); ?>
		            <h2><?php perch_content('Main heading'); ?><br><span><?php perch_content('Tagline'); ?></span></h2>
		        </div><!--end gallery-->
		        
		        <div class="container">
					<h3><?php perch_content('Content heading'); ?></h3>
		        	<p><?php perch_content('Content'); ?></p>
	        	</div><!--end gallery-->
		        
		        <?php include 'inc/news.inc.php'; ?>
           </div> <!--end main-->
           
    	</div> <!--end inner-wrap-->
		 <?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>