<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'products':
		$model = Products::GetByCategory($_REQUEST['CategoryId']);
		break;
		
	case 'categories':
		$model = Products::GetCategories();
		break;
		
	default:
		//$model = Users::Get();
		$view = 'home.php';
		$title = 'Users';
		break;
}

switch ($format) {
	case 'dialog':
		include '../Shared/_DialogLayout.php';
		break;
	
	case 'plain':
    	include $view;
    	break;
 
	case 'json':
		echo json_encode(array('model' => $model, 'errors' => $errors));
		break;
		
	default:
		include '../Shared/_PublicLayout.php';
		break;
}
