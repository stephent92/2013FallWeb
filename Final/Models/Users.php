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
}