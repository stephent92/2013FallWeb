<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = Inventory::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For: $model[Item]";
		break;
		
	default:
		$model = Inventory::Get();
		$view = 'list.php';
		$title = 'FrontEnd';
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
	
	default:
		include '../Shared/_Layout.php';
		break;
}
