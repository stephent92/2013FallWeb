<?php

class Inventory {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Inventory');
	}
}