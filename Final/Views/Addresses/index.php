<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model = Addresses::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For user: $model[Users_id]";
		break;
	
	case 'new':
		$model = Addresses::Blank();
		$view = 'edit.php';
		$title = 'Add New Address';
		break;
		
	case 'save':
		$errors = Addresses::Validate($_REQUEST);
        if(!$errors){
         	$errors = Addresses::Save($_REQUEST);
        }                  
        if(!$errors){
        	if($format == 'plain' || $format == 'json'){
        		$view = 'item.php';
				$rs = $model = Addresses::Get($_REQUEST['id']);
        	}else{
        		header("Location: ?status=Saved&id=$_REQUEST[id]");
            	die(); 
        	}
        }else{
       		$model = $_REQUEST;
        	$view = 'edit.php';
			$title = "Edit Address For User: $model[Users_id]";
        }
		break;
		
	case 'edit':
		$model = Addresses::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Address For User: $model[Users_id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Addresses::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Addresses::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Address For User: $model[Users_id]";
		break;
		
	default:
		$model = Addresses::Get();
		$view = 'list.php';
		$title = 'Addresses';
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
		include '../Shared/_Layout.php';
		break;
}
