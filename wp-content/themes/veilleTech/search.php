<?php
get_header();
$allSearch=new WP_Query("s=$s");

foreach ($allSearch as $res){
	echo '<br>';
	var_dump($res);
	echo '<br>';
}
//var_dump($allSearch);


get_footer();


