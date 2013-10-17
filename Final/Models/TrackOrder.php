<?php

class TrackOrder {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM TrackOrder');
	}
}