<?php
	include_once '../../inc/_global.php';
	
	$model = Feedback::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
