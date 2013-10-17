<?php

class Keywords {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Keywords');
	}
}