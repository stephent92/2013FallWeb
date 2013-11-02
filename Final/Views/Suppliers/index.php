<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = Suppliers::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details for: $model[Supplier]";
		break;
	
	case 'new':
		$model = Suppliers::Blank();
		$view = 'edit.php';
		$title = 'Create New User';
		break;
		
	case 'save':
		$errors = Suppliers::Validate($_REQUEST);
        if(!$errors){
         	$errors = Suppliers::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
		$title = "Edit: $model[Supplier]";
		break;
		
	case 'edit':
		$model = Suppliers::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit: $model[Supplier]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Suppliers::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Suppliers::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete: $model[Supplier]";
		break;
		
	default:
		$model = Suppliers::Get();
		$view = 'list.php';
		$title = 'Suppliers';
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
