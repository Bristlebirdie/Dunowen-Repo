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
					<?php perch_content('Slideshow'); ?>	
				</div><!--end gallery-->	
		        
	        	<div class="container">
			        <?php perch_content('Content'); ?>
			        			        
		        	<div class="mappanel">
			        	<div class="map">
			        	    <img src="img/map.jpg" />
			        	    <h4>Dunowen House</h4>
			        	</div>				
		        		<ul class="vcard">
			        		<li><span class="fn org" rel="me">Dunowen House</span>, 
			        			<span class="locality">Clonakilty</span>, 
			        			<span class="region">Co. Cork</span>, 
			        			<span class="country-name">Ireland</span>
			        		</li>
			        		<li><span class="tel">+353 23 886 9099</span></li>
			        		<li>info@dunowenhouse.ie </li>
			        		<li><a href="http://dunowenhouse.ie" class="url" rel="me">www.dunowenhouse.ie</a></li>	
			        		<li>Co-Ordinates  -  51.6219° N, 8.8864° W </li>			
		        		</ul>
		        	</div><!--end mappanel-->
		        </div><!--end container-->
		         
		        <?php include 'inc/news.inc.php'; ?>
           </div> <!--end main-->
           
    	</div> <!--end inner-wrap-->
		<?php include 'inc/footer.inc.php'; ?>	  	   
	</div><!--end wrapper--> 
	<?php include 'inc/scripts.inc.php'; ?>	    
</body>
</html>