<?php

class UserTypes 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM UserTypes WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM UserTypes');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = UserTypes::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE UserTypes "
				.  	" Set UserType='$row2[UserType]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into UserTypes (UserType) "
				.	" Values ('$row2[UserType]') ";
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
		$sql = " DELETE From UserTypes WHERE id=$id ";
		
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
        return array('id'=>null, 'UserType'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['UserType']) $errors['UserType']=" is required";
        
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