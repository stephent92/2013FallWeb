<?php

class PaymentMethods 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM PaymentMethods WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM PaymentMethods');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = PaymentMethods::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE PaymentMethods "
				.  	" Set Number='$row2[Number]', Expiration='$row2[Expiration]', Users_id='$row2[Users_id]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into PaymentMethods (Number, Expiration, Users_id) "
				.	" Values ('$row2[Number]', '$row2[Expiration]', '$row2[Users_id]') ";
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
		$sql = " DELETE From PaymentMethods WHERE id=$id ";
		
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
        return array('id'=>null, 'Users_id'=>null, 'Number'=>null, 'Expiration'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Users_id']) $errors['Users_id']=" is required";
        if(!$row['Number']) $errors['Number']=" is required";
		if(!$row['Expiration']) $errors['Expiration']=" is required";
        
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