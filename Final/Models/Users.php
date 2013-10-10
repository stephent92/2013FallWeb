<?php

class Users {
	
	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Users');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		
		$conn->close();
		return $ret;
	}
}