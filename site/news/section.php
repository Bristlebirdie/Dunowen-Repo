<?php 
	include('../perch/runtime.php'); 
	include '../inc/headblog.inc.php';
	?>
	 <title>Special Offers</title>   
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
					<h2>Dunowen House <span>Special Offers</span></h2>

    		    		<!--<?php perch_blog_section(perch_get('section')); ?>-->
    		    
	    		    	<?php perch_blog_custom([
	    		    		'section'=>'special-offers',
	    		    		'filter'=>'special-offers',
	    		    		'sort' => 'postDateTime',
	    		    		'sort-order' => 'DESC',
	    		    		'count' => 10,
	    		    		'template' => 'section_list.html'
	    		    	]); ?>	
				</div>
				<?php include '../inc/news.inc.php'; ?>
			</div> <!--end main-->
		</div> <!--end inner-wrap-->
		<?php include '../inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include '../inc/scripts.inc.php'; ?>	    
</body>
</html>
<!--

'section' => 'section-name',
-->