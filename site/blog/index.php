<?php 
	include('../perch/runtime.php'); 
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
				<div class="gallery">
					<?php perch_content('Slideshow'); ?>	
				</div><!--end gallery-->	
				<div class="container">
			<h2>News</h2>
		    <?php 
		        perch_blog_recent_posts(10);
		    ?>
		    
		    <p><a href="archive.php">More posts</a></p>
		</div>
		
		<nav class="sidebar">
			<h2>Archive</h2>
		    <!-- The following functions are different ways to display archives. You can use any or all of these. 
		    
		    All of these functions can take a parameter of a template to overwrite the default template, for example:
		    
		    perch_blog_categories('my_template.html');
		    
		    --> 
		    <!--  By category listing -->
		    <?php perch_blog_categories(); ?>
		    <!--  By tag -->
		    <?php perch_blog_tags(); ?>
		    <!--  By year -->
		    <?php perch_blog_date_archive_years(); ?>
		    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		    <?php perch_blog_date_archive_months(); ?>
		</nav>
		
	</div><!--end container-->
					<?php include '../inc/news.inc.php'; ?>
				</div> <!--end main-->
			</div> <!--end inner-wrap-->
			<?php include '../inc/footer.inc.php'; ?>	  	   
		</div><!--end wrapper--> 
		<?php include '../inc/scripts.inc.php'; ?>	    
	</body>
	</html>