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
		$conn = GetConnection();
		$row2 = Users::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Users "
				.  	" Set FirstName='$row2[FirstName]', LastName='$row2[LastName]', Password='$row2[Password]', UserTypes_id='$row2[UserTypes_id]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Users (FirstName, LastName, Password, UserTypes_id) "
				.	" Values ('$row2[FirstName]', '$row2[LastName]', '$row2[Password]', '$row2[UserTypes_id]') ";
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
	
	static public function Blank()
    {
        return array('id'=>null, 'FirstName'=>null, 'LastName'=>null, 'Password'=>null, 'UserTypes_id'=>null);
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
    
    static function Encode($row, $conn)
    {	
        $row2 = array();
        foreach ($row as $key => $value) {
            $row2[$key] = $conn->real_escape_string($value);
        }
		return $row2;
	}
}