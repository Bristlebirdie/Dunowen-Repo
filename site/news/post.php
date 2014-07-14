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
			    <?php include '../inc/nav.inc.php'; ?>
			    <?php include '../inc/contacts.inc.php'; ?>
			</header>
			<div class="main">		        
			<?php include '../inc/address.inc.php'; ?>
				<div class="blog container clearfix">				
					<h2>Dunowen House <span>Blog post</span></h2>
					<br>
					<p><em>A journal about life at Dunowen House, West Cork. Exploring, entertaining, cooking, eating, making the most of this idyllic life.</em></p>
					<?php perch_blog_post(perch_get('s')); ?>
				    	
			    	<div class="meta">
		                <?php perch_blog_post_categories(perch_get('s')); ?>
		                <?php perch_blog_post_tags(perch_get('s')); ?>
			        </div>
				    	<?php// perch_blog_post_comments(perch_get('s')); ?>
				    	
				    	<?php// perch_blog_post_comment_form(perch_get('s')); ?>
				</div><!--end container-->
				
				<aside class="sidebar">
				<h4>Archive</h4>
					<!--  By most recent posts -->
				    <?php  
				    perch_blog_custom(array(
				                    'count' => 10,
				                    'template' => 'post_list_link.html',
				                    'sort' => 'postDateTime',
				                    'sort-order' => 'DESC',
				                ));
				    ?>
				    <!--  By category listing -->
				    <?php perch_blog_categories(); ?>
				    <!--  By tag -->
				    <?php perch_blog_tags(); ?>
				    <!--  By months and year -->
				    <?php perch_blog_date_archive_months(); ?>    
				</aside>	
				<?php include '../inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>	    
</body>
</html>