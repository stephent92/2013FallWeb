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
		
	case 'purchase':
		$errors = Orders::Validate($_REQUEST);
        if(!$errors){
         	$errors = Orders::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'list.php';
		$title = "Purchase Item: $model[Item]";
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
