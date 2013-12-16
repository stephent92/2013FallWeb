<?php
include_once('_password.php');

session_start();
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/ContactMethods.php';
include_once __DIR__ . '/../Models/Feedback.php';
include_once __DIR__ . '/../Models/Inventory.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/Wishlist.php';
include_once __DIR__ . '/../Models/PaymentMethods.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/UserTypes.php';
include_once __DIR__ . '/../Models/Categories.php';
include_once __DIR__ . '/../Models/Auth.php';
include_once __DIR__ . '/../Models/FinalZIP.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02691685', $sql_password, 'n02691685_db');
	return $conn;
}

function GetConnectionFinal()
{
	$conn = new MySQLi('localhost', 'plotkinm', 'FaceBooK', 'plotkinm_db');
	return $conn;
}

function fetch_all($sql)
{
	$ret = array();
	$conn = GetConnection();
	$result = $conn->query($sql);
	
	echo $conn->error;
	
	while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
	}
		
	$conn->close();
	return $ret;
}

function fetch_one($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}

function fetch_allFinal($sql)
{
	$ret = array();
	$conn = GetConnectionFinal();
	$result = $conn->query($sql);
	
	echo $conn->error;
	
	while ($rs = $result->fetch_assoc()) {
		$ret[] = $rs;
	}
		
	$conn->close();
	return $ret;
}

function fetch_oneFinal($sql)
{
	$arr = fetch_all($sql);
	return $arr[0];
}
