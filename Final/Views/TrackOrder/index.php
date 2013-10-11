<?php
	include_once '../../inc/_global.php';
	
	$model = TrackOrder::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
