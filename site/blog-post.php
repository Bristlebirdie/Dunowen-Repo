<?php 
	include('perch/runtime.php'); 
	include 'inc/head.inc.php';
?>

<body>
<?php include 'inc/browsehappy.inc.php'; ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
			    <?php include 'inc/nav.inc.php'; ?>
			    <?php include 'inc/contacts.inc.php'; ?>
			</header>
			<div class="main">		        
			<?php include 'inc/address.inc.php'; ?>

	        	<div class="blog container clearfix">
	        		<h2>Dunowen House <span>Blog</span></h2>
	        		<article>
	        		<div class="post">
		        		<?php perch_blog_post(perch_get('s')); ?>
		        		
		        		<?php perch_blog_author_for_post(perch_get('s')); ?>
		        				    	
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
				    </div>
	        			<!--<div class="post-pic">
	        				<img src="img/blog_pic.jpg" alt="picture" />
	        			</div>
	        			<div class="blog-post"><h4>Title of Blog</h4>
	        		    	<div class="date">19/06/2014 <span>tag/tag/tag</span></div>
	        		    	<p>Sed metus ipsum, mollis sit amet consequat id, dictum non odio. Mauris varius est at auctor porttitor. Nullam lobortis cursus fringilla. In molestie nisl vel sollicitudin tempus. Proin egestas nec diam sed faucibus. Nullam varius purus sed est fermentum condimentum. Duis varius fermentum turpis a euismod. Donec tempus dapibus eros, ut bibendum erat ultrices sed. <br><br>
	        		    	
	        		    	<ul>
		        		    	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li> 
		        		    	<li>Nam faucibus in nisl ut iaculis.</li> 
		        		    	<li>Sed venenatis semper orci, non tempor metus venenatis gravida.</li>
		        		    	<li>Mauris rhoncus vestibulum nibh vitae bibendum. </li>
		        		    	<li>Suspendisse vel felis vitae mauris ullamcorper malesuada in eu diam.</li> 
	        		    	</ul>
	        		    	
	        		    	Sed laoreet consectetur leo vel hendrerit. Nunc sed orci neque. Aenean vel nisl erat. Aliquam erat volutpat. In ac aliquet nunc. Aliquam in turpis elit. Phasellus blandit, tellus nec ullamcorper lobortis, ipsum enim lacinia metus, nec mollis orci nisi vitae ligula. Nam ac ipsum sit amet nisl sagittis aliquam in eget tortor. Integer quis venenatis leo. Aliquam et justo eget elit semper eleifend. Ut gravida interdum orci, vel mollis est consectetur ac.
	        		    	
	        		    	</p>
	        			</div>-->
	        		</article>
	        				        	
		        </div><!--end container-->
		         
		        <?php include 'inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>