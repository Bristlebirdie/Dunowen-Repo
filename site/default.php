<?php
	include 'perch/runtime.php';
	include 'inc/head.inc.php';
?>

<body>
	<?php include 'inc/browsehappy.inc.php'; ?>
	<div class="wrapper">
		<div class="inner-wrap">
			<header>
		        <?php include 'inc/nav.inc.php'; ?>
		        <?php perch_pages_navigation(array(
		            'levels' => 1,
		        )); ?>
		        
			          	<ul class="second-nav">
			          		<li class="active"><a href="about.html">Dunowen House</a></li> 
			          	    <li><a href="#">History</a></li> 
			          	    <li><a href="map.html">Map &amp; Directions</a></li>
			          	</ul>
					</nav>
		        <?php include 'inc/contacts.inc.php'; ?>
			</header>
			
	        <div class="main">		        
		        <?php include 'inc/address.inc.php'; ?>
				<div class="gallery">
					<div class="flexslider">
						<ul class="slides">
					        <li>
					        <?php perch_content('Slide 1'); ?>
					        </li>
					        <li>
					        <?php perch_content('Slide 2'); ?>
					        </li>
					        <li>
					        <?php perch_content('Slide 3'); ?>
					        </li>
						</ul>
					</div>	
				
				</div><!--end gallery-->	        	
				<div class="container">
				        <h3><?php perch_content('Content heading'); ?></h3>   
					<div class="container-pic">
				            <?php perch_content('Square image 2'); ?>
				            <?php perch_content('Square image 1'); ?>
				    </div>
			        <p><?php perch_content('Content'); ?></p>
			        
		        </div><!--end container-->
		         
		        <?php include 'inc/news.inc.php'; ?>
		                   </div> <!--end main-->
		                   
		            	</div> <!--end inner-wrap-->
		        		 <?php include 'inc/footer.inc.php'; ?>	  	   
		        	</div><!--end wrapper--> 
		        	<?php include 'inc/scripts.inc.php'; ?>	    
		        </body>
		        </html>