<?php

class Keywords {
	
	static public function Get()
	{
		$ret = array();
		$conn = GetConnection();
		$result = $conn->query('SELECT * FROM Keywords');
		
		while ($rs = $result->fetch_assoc()) {
			$ret[] = $rs;
		}
		
		$conn->close();
		return $ret;
	}
}