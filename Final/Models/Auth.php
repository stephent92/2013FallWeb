<?
	const ADMIN = 3;
	
	class Auth
	{
		public static function IsLoggedIn()
		{
			return self::GetUser() != null;
		}
		
		public static function GetUser()
		{
			return $_SESSION['User'];
		}
		
		public static function HasPermission()
		{
			$user = self::GetUser();
			return $user['UserTypes_id'] == ADMIN;
		}
		
		public static function LogIn($userName, $password)
		{
			$sql =  "	SELECT U.*
					  	FROM Users U
					  	WHERE U.LastName='$userName'";
			$user = fetch_one($sql);
			if($user['Password'] == $password){
				$_SESSION['User'] = $user;
			}
		}
		
		public static function Secure()
		{
			if(!self::IsLoggedIn()){
				header('Location: ' . "/~n02691685/2013/Final/Views/Auth?action=login"); die();
			}
		}
	}
		