<?php

class Wishlist {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Wishlist');
	}
}