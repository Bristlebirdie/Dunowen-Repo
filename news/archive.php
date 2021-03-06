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
					<h2>Dunowen House <span>News</span></h2>
					<p class="blog-tagline">A journal about life at Dunowen House, West Cork. Exploring, entertaining, cooking, eating, making the most of this idyllic life.</p>
				    <?php 	        
				        // defaults for all modes
				        $posts_per_page = 10;
				        $template 		= 'post_in_list.html';
				        $sort_order		= 'DESC';
				        $sort_by		= 'postDateTime';
		
				        // Have we displayed any posts yet?
				        $posts_displayed = false;
		
				        /* 
				        	perch_get() is used to get options from the URL.
							
							e.g. for the URL 
								/blog/archive.php?cat=news
		
							perch_get('cat') would return 'news' because cat=news.
		
		
							The code below looks for different options in the URL, and then displays different types of listings based on it.
				        */
		
				        
				        /* --------------------------- POSTS BY CATEGORY --------------------------- */
				        if (perch_get('cat')) {
				            echo '<h3>Archive of: '.perch_blog_category(perch_get('cat'), true).'</h3>';
		
				            perch_blog_custom(array(
									'category'   => perch_get('cat'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));
		
				            $posts_displayed = true;
				        }
				        
				        
				        /* --------------------------- POSTS BY TAG --------------------------- */
				        if (perch_get('tag')) {
				            echo '<h3>Archive of: '.perch_blog_tag(perch_get('tag'), true).'</h3>';
		
				            perch_blog_custom(array(
									'tag'   	 => perch_get('tag'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));
		
				            $posts_displayed = true;
				        }
				        
				        
		
				        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
				        if (perch_get('year')) {
				            
							$year              = intval(perch_get('year'));
							$date_from         = $year.'-01-01 00:00:00';
							$date_to           = $year.'-12-31 23:59:59';
							$title_date_format = '%Y';
				            
				            
				            // Month and Year?
				            if (perch_get('month')) {
								$month             = intval(perch_get('month'));
								$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
								$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
								$title_date_format = '%B, %Y';
				            }
		
				            echo '<h3>Archive of: '.strftime($title_date_format, strtotime($date_from)).'</h3>';
		
				            perch_blog_custom(array(
									'filter'     => 'postDateTime',
									'match'      => 'eqbetween',
									'value'      => $date_from.','.$date_to,
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));
		
				            $posts_displayed = true;
				        }
				        
				        
		
				        /* --------------------------- POSTS BY AUTHOR --------------------------- */
				        if (perch_get('author')) {
		
				        	echo '<h3>Posts by '.perch_blog_author(perch_get('author'), array(
				        											'template' => 'author_name.html',
				        											), true).'</h3>';
		
		
				        	perch_blog_custom(array(
									'author'   	 => perch_get('author'),
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));
		
				            $posts_displayed = true;
				        }
		
				        
				      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */
		
				      	if ($posts_displayed == false) {
		
				      		// No other options have been used; no posts have been displayed yet.
				      		// So display all posts.
				      		 
				      		echo '<h3>Archive</h3>';
		
				      		perch_blog_custom(array(
									'template'   => $template,
									'count'      => $posts_per_page,
									'sort'       => $sort_by,
									'sort-order' => $sort_order,
				                    ));
		
				      	}
		
				    ?>
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