<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'details':
		$model = Keywords::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For Keyword: $model[Name]";
		break;
	
	case 'new':
		$model = Keywords::Blank();
		$view = 'edit.php';
		$title = 'Add New Item';
		break;
		
	case 'save':
		$errors = Keywords::Validate($_REQUEST);
        if(!$errors){
         	$errors = Keywords::Save($_REQUEST);
        }                  
        if(!$errors){
            header("Location: ?");
            die(); 
        }
        $model = $_REQUEST;
        $view = 'edit.php';
		$title = "Edit Keyword: $model[Name]";
		break;
		
	case 'edit':
		$model = Keywords::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Keyword: $model[Name]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Keywords::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Keywords::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Keyword: $model[Name]";
		break;
		
	default:
		$model = Keywords::Get();
		$view = 'list.php';
		$title = 'Keywords';
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
