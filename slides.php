<?php
// ajax loads additional flexslider images
	include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php');
	$page = $_GET['page'];
	perch_content_custom('Slideshow', array(
		'page'=>$page.'index.php',
	    'template'=>'slides_rest.html'
	));
?>