<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'details':
		$model = Feedback::Get($_REQUEST['id']);
		$view = 'details.php';
		$title = "Feedback Details For User: $model[Users_id]";
		break;
	
	case 'new':
		$model = Feedback::Blank();
		$view = 'edit.php';
		$title = 'Add Feedback';
		break;
		
	case 'save':
		$errors = Feedback::Validate($_REQUEST);
        if(!$errors){
         	$errors = Feedback::Save($_REQUEST);
        }                  
        if(!$errors){
        	if($format == 'plain' || $format == 'json'){
        		$view = 'item.php';
				$rs = $model = Feedback::Get($_REQUEST['id']);
        	}else{
        		header("Location: ?status=Saved&id=$_REQUEST[id]");
            	die(); 
        	}
        }else{
       		$model = $_REQUEST;
        	$view = 'edit.php';
			$title = "Edit Feedback For User: $model[Users_id]";
        }
		break;
		
	case 'edit':
		$model = Feedback::Get($_REQUEST['id']);
		$view = 'edit.php';
		$title = "Edit Feedback For User: $model[Users_id]";
		break;
		
	case 'delete':
		if(isset($_POST['id'])){
	        $errors = Feedback::Delete($_REQUEST['id']);            
	        if(!$errors){
	            header("Location: ?");
	            die(); 
	        }
		}
		$model = Feedback::Get($_REQUEST['id']);
		$view = 'delete.php';
		$title = "Delete Feedback For User: $model[Users_id]";
		break;
		
	default:
		$model = Feedback::Get();
		$view = 'list.php';
		$title = 'Feedback';
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
