<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = UserTypes::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details for: $model[UserType]";
		break;
	
	case 'new':
		$model = UserTypes::Blank();
		$view = 'edit.php';
		$title = 'Create New UserType';
		break;
		
	case 'save':
		$errors = UserTypes::Validate($_REQUEST);
        if(!$errors){
         	$errors = UserTypes::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
		$title = "Edit: $model[UserType]";
		break;
		
	case 'edit':
		$model = UserTypes::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit: $model[UserType]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = UserTypes::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = UserTypes::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete: $model[UserType]";
		break;
		
	default:
		$model = UserTypes::Get();
		$view = 'list.php';
		$title = 'UserTypes';
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
