<?php

class Suppliers {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Suppliers');
	}
}