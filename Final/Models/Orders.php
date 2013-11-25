<?php

class Orders 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Orders WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Orders');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Orders::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Orders "
				.  	" Set Value='$row2[Value]', Users_id='$row2[Users_id]', TrackingNumber='$row2[TrackingNumber]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Orders (Value, Users_id, TrackingNumber) "
				.	" Values ('$row2[Value]', '$row2[Users_id]', '$row2[TrackingNumber]') ";
		}
		
		$conn->query($sql);
		$error = $conn->error;
		$conn->close();
		
		if($error){
			return array('db_error' => $error);
		}else{
			return false;
		}
	}
	
	static public function Delete($id)
	{
		$conn = GetConnection();
		$sql = " DELETE From Orders WHERE id=$id ";
		
		$conn->query($sql);
		$error = $conn->error;
		$conn->close();
		
		if($error){
			return array('db_error' => $error);
		}else{
			return false;
		}
	}
	
	static public function Blank()
    {
        return array('id'=>null, 'Value'=>null, 'Users_id'=>null, 'TrackingNumber'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Value']) $errors['Value']=" is required";
        if(!$row['TrackingNumber']) $errors['TrackingNumber']=" is required";
        if(!$row['Users_id']) $errors['Users_id']=" is required";
        
        if(count($errors) == 0)
        {
            return false;
        }else
        {
            return $errors;                   
        }
    }
    
    static function Encode($row, $conn)
    {	
        $row2 = array();
        foreach ($row as $key => $value) {
            $row2[$key] = $conn->real_escape_string($value);
        }
		return $row2;
	}
}