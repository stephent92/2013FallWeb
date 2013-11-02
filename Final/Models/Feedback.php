<?php

class Feedback 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Feedback WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Feedback');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Feedback::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Feedback "
				.  	" Set Users_id='$row2[Users_id]', Comments='$row2[Comments]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Feedback (Users_id, Comments) "
				.	" Values ('$row2[Users_id]', '$row2[Comments]') ";
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
		$sql = " DELETE From Feedback WHERE id=$id ";
		
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
        return array('id'=>null, 'Users_id'=>null, 'Comments'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Users_id']) $errors['Users_id']=" is required";
        if(!$row['Comments']) $errors['Comments']=" is required";
        
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