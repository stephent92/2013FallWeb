<?php

class Categories 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Categories WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Categories');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Categories::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Categories "
				.  	" Set Category='$row2[Category]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Categories (Category) "
				.	" Values ('$row2[Category]') ";
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
		$sql = " DELETE From Categories WHERE id=$id ";
		
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
        return array('id'=>null, 'Category'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Category']) $errors['Category']=" is required";
        
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