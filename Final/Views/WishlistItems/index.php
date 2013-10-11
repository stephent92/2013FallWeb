<?php
	include_once '../../inc/_global.php';
	
	$model = WishlistItems::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
