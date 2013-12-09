<?php

class Inventory 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("	SELECT U.*, K.Category as Category_Name
							  	FROM Inventory U
							  		Join Categories K ON U.Categories_id=K.id
							  	WHERE U.id=$id");
		}else{
			return fetch_all('	SELECT U.*, K.Category as Category_Name
							  	FROM Inventory U
							  		Join Categories K ON U.Categories_id=K.id');
		}
	}
	
	static public function GetByCategory($Categoryid)
	{
		return fetch_all("SELECT * FROM Inventory WHERE Categories_id=$Categoryid");
	}
	
	static public function GetCategories($id=null)
	{
		return fetch_all('SELECT * FROM Categories');
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Inventory::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Inventory "
				.  	" Set Quantity='$row2[Quantity]', Item='$row2[Item]', Price='$row2[Price]', Description='$row2[Description]', Img='$row2[Img]', Categories_id='$row2[Categories_id]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Inventory (Quantity, Item, Price, Description, Img, Categories_id) "
				.	" Values ('$row2[Quantity]', '$row2[Item]', '$row2[Price]', '$row2[Description]', '$row2[Img]', '$row2[Categories_id]') ";
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
		$sql = " DELETE From Inventory WHERE id=$id ";
		
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
        return array('id'=>null, 'Quantity'=>null, 'Item'=>null, 'Price'=>null, 'Description'=>null, 'Img'=>null, 'Categories_id'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Quantity']) $errors['Quantity']=" is required";
        if(!$row['Item']) $errors['Item']=" is required";
        if(!$row['Price']) $errors['Price']=" is required";
        if(!$row['Description']) $errors['Description']=" is required";
        if(!$row['Img']) $errors['Img']=" is required";
		if(!$row['Categories_id']) $errors['Categories_id']=" is required";
		
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