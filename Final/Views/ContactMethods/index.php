<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = ContactMethods::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For User: $model[Users_id]";
		break;
	
	case 'new':
		$model = ContactMethods::Blank();
		$view = 'edit.php';
		$title = 'Add New Contact Method';
		break;
		
	case 'save':
		$errors = ContactMethods::Validate($_REQUEST);
        if(!$errors){
         	$errors = ContactMethods::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
		$title = "Edit Contact Method For User: $model[Users_id]";
		break;
		
	case 'edit':
		$model = ContactMethods::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Contact Method For User: $model[Users_id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = ContactMethods::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = ContactMethods::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Contact Method For User: $model[Users_id]";
		break;
		
	default:
		$model = ContactMethods::Get();
		$view = 'list.php';
		$title = 'ContactMethods';
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
