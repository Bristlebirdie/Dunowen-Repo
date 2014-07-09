<div class="news">
    <div class="col">
    <h4>Special Offers</h4>
    	<img src="img/40x40.png" alt="picture" />
		<h5>Family Getaway</h5>
	  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis dolor nec ultricies.</p>
		<button type="button"><a href="offers.html">Check offers</a></button>
    </div><!--end col-->
    
    <div class="col">
        <h4>Latest News</h4>
 
        <?php  
        perch_blog_custom(array(
                        'count' => 1,
                        'template' => 'post_for_news.html',
                        'sort' => 'postDateTime',
                        'sort-order' => 'DESC',
                    ));
        ?>
    
    </div> <!--end col-->
    
    <div class="col">
       <h5>Make a reservation</h5>
       <p></p>
       <button type="button"><a href="contact.html">Book Now</a></button>
    </div> <!--end col-->
</div> <!--end news-->