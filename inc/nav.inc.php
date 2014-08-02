<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/'; ?>" title="Dunowen House"><h1>Dunowen House <span>Ardfield</span></h1></a>
<a id="jump-top" href="#menu" class="menu-link ">&#9776; Menu</a>
<nav id="main-nav" role="navigation" class="main-nav">
<?php 
	perch_pages_navigation(array(
		'template' => array('item.html', 'subitem.html')
	));
	if(strpos($_SERVER['REQUEST_URI'], '/news/')===false && strpos($_SERVER['REQUEST_URI'], '/special-offers/')===false) {
		perch_pages_navigation(array(
			'from-path'=> '*',
			'from-level'=> 1,
			'template'=> 'second.html'				
		)); 
	}
?>
</nav>