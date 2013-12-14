<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model = Orders::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For Order For User: $model[Users_id]";
		break;
	
	case 'new':
		$model = Orders::Blank();
		$view = 'edit.php';
		$title = 'Add New Order';
		break;
		
	case 'save':
		$errors = Orders::Validate($_REQUEST);
        if(!$errors){
         	$errors = Orders::Save($_REQUEST);
        }                  
        if(!$errors){
        	if($format == 'plain' || $format == 'json'){
        		$view = 'item.php';
				$rs = $model = Orders::Get($_REQUEST['id']);
        	}else{
        		header("Location: ?status=Saved&id=$_REQUEST[id]");
            	die(); 
        	}
        }else{
       		$model = $_REQUEST;
        	$view = 'edit.php';
			$title = "Edit Order For User: $model[Users_id]";
        }
		break;
		
	case 'edit':
		$model = Orders::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Order For User: $model[Users_id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Orders::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Orders::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Order For User: $model[Users_id]";
		break;
		
	default:
		$model = Orders::Get();
		$view = 'list.php';
		$title = 'Orders';
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
