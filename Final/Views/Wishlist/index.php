<?php
	include_once '../../inc/_global.php';
	
	$model = Wishlist::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
