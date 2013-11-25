<?php

class Products 
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Products WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Products');
		}
	}
	
	static public function GetByCategory($Categoryid)
	{
		return fetch_all("SELECT * FROM Products WHERE 'Product_Category_id'=$Categoryid");
	}
	
	static public function GetCategories($id=null)
	{
		if(isset($id)){
			return fetch_one("SELECT * FROM Product_Categories WHERE id=$id");
		}else{
			return fetch_all('SELECT * FROM Product_Categories');
		}
	}
}