<?php
	include_once '../../inc/_global.php';
	
	$model = ContactMethods::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
