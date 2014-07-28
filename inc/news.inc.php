<div class="news">
    
    <div class="col">
       <h4>Latest News</h4>
			<?php //perch_blog_section(perch_get('section')); ?>

		     	<?php perch_blog_custom([
		     		'section'=>'posts',
		     		'filter'=>'posts',
		     		'sort' => 'postDateTime',
		     		'sort-order' => 'DESC',
		     		'count' => 1,
		     		'template' => 'post_for_news.html'
		     	]); ?>	
   </div> <!--end col-->
    
    <div class="col">
    <h4>Special Offers</h4>
    	<?php //perch_blog_section(perch_get('section')); ?>
    	
    	    	<?php perch_blog_custom([
    	    		'section'=>'special-offers',
    	    		'filter'=>'special-offers',
    	    		'sort' => 'postDateTime',
    	    		'sort-order' => 'DESC',
    	    		'count' => 1,
    	    		'template' => 'post_for_news_special_offers.html'
    	    	]); ?>	
    </div><!--end col-->
    
   
    
    <div class="col">
       <h5>Make a reservation</h5>
       <p></p>
       <button type="button"><a href="contact.php">Book Now</a></button>
    </div> <!--end col-->
    
    <small>&copy; Dunowen House 2014. All rights reserved. <a href="http://bristlebird.com" target="_blank">Website developed by Bristlebird Media Works.</a></small>
    
</div> <!--end news-->