<?php

class Orders {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Orders');
	}
}