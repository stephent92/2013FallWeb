<?php

class WishlistItems {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM WishlistItems');
	}
}