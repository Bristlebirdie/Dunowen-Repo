<aside class="sidebar">
<h4>News Archive</h4>
	<!--  By most recent posts -->
    <?php  
    perch_blog_custom(array(
                    'count' => 10,
                    'template' => 'post_list_link.html',
                    'sort' => 'postDateTime',
                    'sort-order' => 'DESC',
                    'section'=>'posts',
                    'filter'=>'posts',
                ));
    ?>
    <!--  By category listing -->
    <?php perch_blog_categories(array(
                    'section'=>'posts',
                    'filter'=>'posts',
                    'template'=>'post_category_link.html'
                ));
    ?>
    
    <!--  By tag -->
    <?php perch_blog_tags(array(
                    'section'=>'posts',
                    'filter'=>'posts',
                    'template'=>'post_tag_link.html'
                ));
    ?>
    
    <!--  By months and year -->
    <?php perch_blog_date_archive_months(array(
                    'section'=>'posts',
                    'filter'=>'posts',
                ));
    ?>
        
</aside>	