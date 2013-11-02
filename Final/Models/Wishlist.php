<?php

class Wishlist 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Wishlist WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Wishlist');
		}
	}
	
	static public function Save($row)
	{
		$conn = GetConnection();
		$row2 = Wishlist::Encode($row, $conn);
		if($row['id']){
			$sql = 	" UPDATE Wishlist "
				.  	" Set Users_id='$row2[Users_id]', WishlistItem='$row2[WishlistItem]' "
				.  	" WHERE id=$row2[id] ";
		}else{
			$sql =	" Insert Into Wishlist (Users_id, WishlistItem) "
				.	" Values ('$row2[Users_id]', '$row2[WishlistItem]') ";
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
		$sql = " DELETE From Wishlist WHERE id=$id ";
		
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
        return array('id'=>null, 'Users_id'=>null, 'WishlistItem'=>null);
    }

    static public function Validate($row)
    {
        $errors = array();
        if(!$row['Users_id']) $errors['Users_id']=" is required";
        if(!$row['WishlistItem']) $errors['WishlistItem']=" is required";
        
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