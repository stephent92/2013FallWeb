<?php

class FinalZIP
{	
	static public function Get($id=null)
	{
		if(isset($id)){
			return fetch_oneFinal("SELECT * FROM US_Zip_Codes WHERE id=$id");
		}else{
			return fetch_allFinal('SELECT * FROM US_Zip_Codes');
		}
	}
}