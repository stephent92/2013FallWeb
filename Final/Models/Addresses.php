<?php

class Addresses {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Addresses');
	}
}