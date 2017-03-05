<?php 
	require('user_info.php');
	$c_info = new Users_info;
	//echo $ttt->c_ip();
	// echo $ttt->c_OS();
	// echo $ttt->c_Browser();
	echo $c_info->c_Device();
?>