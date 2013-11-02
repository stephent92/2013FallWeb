<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = Inventory::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For ID: $model[id]";
		break;
	
	case 'new':
		$model = Inventory::Blank();
		$view = 'edit.php';
		$title = 'Add New Item';
		break;
		
	case 'save':
		$errors = Inventory::Validate($_REQUEST);
        if(!$errors){
         	$errors = Inventory::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
		$title = "Edit Inventory For ID: $model[id]";
		break;
		
	case 'edit':
		$model = Inventory::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Inventory For ID: $model[id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Inventory::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Inventory::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Inventory For ID: $model[id]";
		break;
		
	default:
		$model = Inventory::Get();
		$view = 'list.php';
		$title = 'Inventory';
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
