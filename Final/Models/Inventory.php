<?php

class Inventory 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Inventory WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Inventory');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Inventory::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Inventory "
				.  	" Set Quantity='$row2[Quantity]', Item='$row2[Item]', Price='$row2[Price]', Description='$row2[Description]', Img='$row2[Img]', Category='$row2[Category]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Inventory (Quantity, Item, Price, Description, Img, Category) "
				.	" Values ('$row2[Quantity]', '$row2[Item]', '$row2[Price]', '$row2[Description]', '$row2[Img]', '$row2[Category]') ";
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
        return array('id'=>null, 'Quantity'=>null, 'Item'=>null, 'Price'=>null, 'Category'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Quantity']) $errors['Quantity']=" is required";
        if(!$row['Item']) $errors['Item']=" is required";
        if(!$row['Price']) $errors['Price']=" is required";
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