<?php 
	include('../perch/runtime.php'); 
	include '../inc/head.inc.php';
	?>
	<title><?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?> Blog Post</title>   
	</head>
	
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
				<div class="blog container clearfix">
					<h2>Dunowen House <span>News</span></h2>
					<p class="blog-tagline">A journal about life at Dunowen House, West Cork. Exploring, entertaining, cooking, eating, making the most of this idyllic life.</p>
				    <?php //perch_blog_section(perch_get('section')); ?>
				        	<?php perch_blog_custom([
				        		'count'=>3,
				        		'section'=>'posts',
				        		'sort' => 'postDateTime',
				        		'sort-order' => 'DESC',
				        		'template' => 'post_in_list.html'
				        	]); ?>	
				<!--<p><a href="archive.php">More posts</a></p>-->
				</div>
				<?php include '../inc/blog-sidebar.inc.php'; ?>
				<?php include '../inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>	    
</body>
</html>