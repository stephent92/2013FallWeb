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
        $model = Orders::Blank();
		$modelBuy = Inventory::Get($_REQUEST['id']);
        $view = 'purchase.php';
		$title = "Purchase Item: $modelBuy[Item]";
		break;
		
	case 'save':
		print_r($_REQUEST);
		$errors = Orders::Validate($_REQUEST);
        if(!$errors){
         	$errors = Orders::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?action=purchase&id=$_REQUEST[id]");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'purchase.php';
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
