<?php

class Feedback {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM Feedback');
	}
}