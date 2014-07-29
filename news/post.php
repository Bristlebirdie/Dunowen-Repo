<?php 
	include('../perch/runtime.php'); 
	include('../inc/functions.inc.php');
// FACEBOOK OPEN GRAPH TAGS
	$title = perch_blog_post_field(perch_get('s'), 'postTitle', true);
//	$section = perch_blog_section(perch_get('s'), true);
	$sectionID = perch_blog_post_field(perch_get('s'), 'sectionID', true);

// $description should be set to SEO description attribute.
	$description = strip_tags(perch_blog_post_field(perch_get('s'), 'excerpt', true));
//	$description = "A journal about life at Dunowen House, West Cork. Exploring, entertaining, cooking, eating, making the most of this idyllic life";
	$metaimage = perch_blog_post_field(perch_get('s'), 'image', true);
	if ($metaimage=='') { $metaimage = perch_blog_post_field(perch_get('s'), 'metaimage', true); }
	$meta_og = '<meta property="og:title" content="'.$title.' | Dunowen House News"/>'."\n".'<meta property="og:type" content="blog" />'."\n";
	$meta_og .= '<meta property="og:description" content="'.$description.'"/>'."\n";
	if ($metaimage!='') { $meta_og .= '<meta property="og:image" content="http://'.$_SERVER['HTTP_HOST'].$metaimage.'"/>'."\n"; }
	$meta_og .= '<meta property="og:url" content="'.curPageUrl().'"/>'."\n";
	$meta_og .= '<meta property="og:site_name" content="Dunowen House B&amp;B, Self-catering, CLonkailty, Co. Cork"/>'."\n";
	include '../inc/headblog.inc.php';
?>
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
					<?php perch_blog_post(perch_get('s')); ?>
					<div class="meta">
					    <?php 
					    	perch_blog_post_categories(perch_get('s'));
					    	perch_blog_post_tags(perch_get('s')); 
					    ?>
					</div>
				    	<?php
				    	// perch_blog_post_comments(perch_get('s')); 
				    	// perch_blog_post_comment_form(perch_get('s'));
				    	?>
				</div><!--end container-->
				<?php // only output sidebar on posts section
					if ($sectionID=='1') { include '../inc/blog-sidebar.inc.php'; }
					include '../inc/news.inc.php'; 
				?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>	    
</body>
</html>