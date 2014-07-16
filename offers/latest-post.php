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
					<h2>Dunowen House <span>News article</span></h2>
					<br>
					<p><em>A journal about life at Dunowen House, West Cork. Exploring, entertaining, cooking, eating, making the most of this idyllic life.</em></p>
					<?php  
					perch_blog_custom(array(
					                'count' => 1,
					                'template' => 'post.html',
					                'sort' => 'postDateTime',
					                'sort-order' => 'DESC',
					            ));
					?>
				    	
			    	<div class="meta">
			    	    <div class="cats">
			    	        <?php perch_blog_post_categories(perch_get('s')); ?>
			    	    </div>
			    	    <div class="tags">
			    	        <?php perch_blog_post_tags(perch_get('s')); ?>
			    	    </div>
			    	</div>
			    		<?php perch_blog_post_comments(perch_get('s')); ?>
			    		
			    		<?php perch_blog_post_comment_form(perch_get('s')); ?>
			    		
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