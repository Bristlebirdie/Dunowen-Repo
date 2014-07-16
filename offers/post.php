<?php 
	include('../perch/runtime.php'); 
	include '../inc/headblog.inc.php';
	?>
	 <title><?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?> Blog Post</title>   
	</head>
<body>
<?php include '../inc/browsehappy.inc.php'; ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
			    <?php include $_SERVER['DOCUMENT_ROOT'] .'/inc/nav.inc.php'; ?>
			    <?php include '../inc/contacts.inc.php'; ?>
			</header>
			<div class="main">		        
			<?php include '../inc/address.inc.php'; ?>
				<div class="blog container clearfix">				
					<h2>Dunowen House <span>Special Offer</span></h2>
					<?php perch_blog_post(perch_get('s')); ?>			    
				</div><!--end container-->
				
				<?php include '../inc/blog-sidebar.inc.php'; ?>
				<?php include '../inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>	    
</body>
</html>