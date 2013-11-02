<?php

class Suppliers 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Suppliers WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Suppliers');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Suppliers::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Suppliers "
				.  	" Set Inventory_id='$row2[Inventory_id]', Supplier='$row2[Supplier]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Suppliers (Inventory_id, Supplier) "
				.	" Values ('$row2[Inventory_id]', '$row2[Supplier]') ";
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
		$sql = " DELETE From Suppliers WHERE id=$id ";
		
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
        return array('id'=>null, 'Inventory_id'=>null, 'Supplier'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Inventory_id']) $errors['Inventory_id']=" is required";
        if(!$row['Supplier']) $errors['Supplier']=" is required";
        
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