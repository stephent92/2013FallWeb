<?php

class Users {
	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Users WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Users');
		}
	}
	
	static public function Save($row)
	{
		$sql =	" Insert Into Users (FirstName, LastName, Password, UserTypes_id) "
			.	" Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserTypes_id]') ";
		$conn = GetConnection();
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
        return array('FirstName'=> null, 'LastName'=> null, 'Password'=> null, 'UserTypes_id'=> null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['FirstName']) $errors['FirstName']=" is required";
        if(!$row['LastName']) $errors['LastName']=" is required";
        if(!is_numeric($row['UserTypes_id'])) $errors['UserTypes_id']=" input has to be numeric";
        
        if(count($errors) == 0)
        {
            return false;
        }else
        {
            return $errors;
                        
        }
    }
}