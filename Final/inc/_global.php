<?php
include_once('_password.php');
include_once __DIR__ . '/../Models/Keywords.php';

function GetConnection()
{
	global $sql_password;
	$conn = new mysqli('localhost', 'n02691685', $sql_password, 'n02691685_db');
	return $conn;
}