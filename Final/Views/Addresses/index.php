<?php
	include_once '../../inc/_global.php';
	
	$model = Addresses::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
