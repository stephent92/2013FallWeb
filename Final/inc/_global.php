<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';
include_once __DIR__ . '/../Models/Users.php';
include_once __DIR__ . '/../Models/Addresses.php';
include_once __DIR__ . '/../Models/ContactMethods.php';
include_once __DIR__ . '/../Models/Feedback.php';
include_once __DIR__ . '/../Models/Inventory.php';
include_once __DIR__ . '/../Models/Suppliers.php';
include_once __DIR__ . '/../Models/Wishlist.php';
include_once __DIR__ . '/../Models/WishlistItems.php';
include_once __DIR__ . '/../Models/PaymentMethods.php';
include_once __DIR__ . '/../Models/Orders.php';
include_once __DIR__ . '/../Models/TrackOrder.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02691685', $sql_password, 'n02691685_db');
	return $conn;
}