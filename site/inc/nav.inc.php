<a href="../index.php" title="Dunowen House"><h1>Dunowen House</h1></a>
<a id="jump-top" href="#menu" class="menu-link ">&#9776; Menu</a>
<nav id="main-nav" roll="navigation" class="main-nav">

	<?php perch_pages_navigation(array
	(
	       'template' => array('item.html', 'subitem.html')
	)); 
	?>
	
	<?php 
	if(strpos($_SERVER['REQUEST_URI'], 'post.php')===false && strpos($_SERVER['REQUEST_URI'], 'archive.php')===false) {
	
		perch_pages_navigation(array
		(
				'from-path'=> '*',
				'from-level'=> 2,
				'template'=> 'second.html'				
		)); 

	}

	?>

</nav>