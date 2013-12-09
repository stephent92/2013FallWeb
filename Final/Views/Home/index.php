<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {
	case 'products':
		$model = Inventory::GetByCategory($_REQUEST['Categories_id']);
		break;
		
	case 'categories':
		$model = Inventory::GetCategories();
		break;
		
	case 'addToCart':
		if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
		$cart = $_SESSION['cart'];
		$cart[] = $_REQUEST['id'];
		$_SESSION['cart'] = $cart;
		header('Location: ?');
		die();
		break;
		
	default:
		$view = 'home.php';
		$title = 'Home';
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
		include '../Shared/_PublicLayout.php';
		break;
}
