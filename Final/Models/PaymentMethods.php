<?php

class PaymentMethods {
	
	static public function Get()
	{
		return fetch_all('SELECT * FROM PaymentMethods');
	}
}