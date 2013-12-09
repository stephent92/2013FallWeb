<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'login':
		$model = array('LastName'=>null, 'Password'=>null);
		$view = 'login.php';
		$title = "Login";
		break;
		
	case 'submitLogin':
		Auth::LogIn($_REQUEST['LastName'], $_REQUEST['Password']);
		header("Location: ../Users/");
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
