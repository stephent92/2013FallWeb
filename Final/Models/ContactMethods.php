<?php

class ContactMethods {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM ContactMethods');
	}
}