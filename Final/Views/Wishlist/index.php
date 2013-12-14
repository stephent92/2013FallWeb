<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model = Wishlist::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Details For User: $model[Users_id]";
		break;
	
	case 'new':
		$model = Wishlist::Blank();
		$view = 'edit.php';
		$title = 'Add New Wishlist Item';
		break;
		
	case 'save':
		$errors = Wishlist::Validate($_REQUEST);
        if(!$errors){
         	$errors = Wishlist::Save($_REQUEST);
        }                  
        if(!$errors){
        	if($format == 'plain' || $format == 'json'){
        		$view = 'item.php';
				$rs = $model = Wishlist::Get($_REQUEST['id']);
        	}else{
        		header("Location: ?status=Saved&id=$_REQUEST[id]");
            	die(); 
        	}
        }else{
       		$model = $_REQUEST;
        	$view = 'edit.php';
			$title = "Edit Wishlist For User: $model[Users_id]";
        }
		break;
		
	case 'edit':
		$model = Wishlist::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Wishlist For User: $model[Users_id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Wishlist::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Wishlist::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Wishlist For User: $model[Users_id]";
		break;
		
	default:
		$model = Wishlist::Get();
		$view = 'list.php';
		$title = 'Wishlist';
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
