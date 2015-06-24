<div class="f-cols">
    <div class="col">
       <h4>Latest News</h4>
	 	<?php perch_blog_custom([
	 		'section'=>'posts',
	 		'filter'=>'posts',
	 		'sort' => 'postDateTime',
	 		'sort-order' => 'DESC',
	 		'count' => 1,
	 		'template' => 'post_for_news.html'
	 	]); ?>	
	</div>
    <div class="col">
	    <h4>Special Offers</h4>
		<?php perch_blog_custom([
			'section'=>'special-offers',
			'filter'=>'special-offers',
			'sort' => 'postDateTime',
			'sort-order' => 'DESC',
			'count' => 1,
			'template' => 'post_for_news_special_offers.html'
		]); ?>	
    </div>
    <div class="col">
       <h4>Make a reservation</h4>
       <div class="btn"><a href="/contact/">Book Now</a></div>
       <div class="logo failte-ireland"><a href="http://failteireland.ie">Failte Ireland</a></div>
       <div class="logo wild-atlantic-way"><a href="http://wildatlanticway.com/">Wild Atlantic Way</a></div>
    </div>
	<small>&copy; Dunowen House 2014. All rights reserved. <a href="http://aislingdoyle.com" target="_blank">Design by Aisling Doyle</a>. <a href="http://bristlebird.com" target="_blank">Web development by Bristlebird Media Works</a>.</small>
</div>