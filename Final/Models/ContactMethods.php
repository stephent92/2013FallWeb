<?php

class ContactMethods 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM ContactMethods WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM ContactMethods');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = ContactMethods::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE ContactMethods "
				.  	" Set PhoneNumber='$row2[PhoneNumber]', Email='$row2[Email]', Users_id='$row2[Users_id]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into ContactMethods (PhoneNumber, Email, Users_id) "
				.	" Values ('$row2[PhoneNumber]', '$row2[Email]', '$row2[Users_id]') ";
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
		$sql = " DELETE From ContactMethods WHERE id=$id ";
		
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
        return array('id'=>null, 'Users_id'=>null, 'PhoneNumber'=>null, 'Email'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Users_id']) $errors['Users_id']=" is required";
        if(!$row['PhoneNumber']) $errors['PhoneNumber']=" is required";
		if(!$row['Email']) $errors['Email']=" is required";
        
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