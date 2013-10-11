<?php
	include_once '../../inc/_global.php';
	
	$model = PaymentMethods::Get();
	$view = 'list.php';
	include '../Shared/_Layout.php';
