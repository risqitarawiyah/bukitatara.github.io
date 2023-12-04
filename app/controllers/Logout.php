<?php 
class Logout { 
	public function index()
	{ 
		$this->method = 'logout';
		header('location: '. base_url . '/login');  
	} 
	
} 