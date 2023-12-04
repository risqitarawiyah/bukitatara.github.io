<?php

class About extends Controller { 
    public function index()  
	{ 	 
		$data['title']  = 'Halaman About Me'; 
		$data['nama']   = 'Tarawiyah'; 
		$data['alamat'] = 'Pango Raya'; 
		$data['no_hp']  = '085767978202'; 

		$this->view('templates/header', $data); 
		$this->view('templates/sidebar', $data); 
		$this->view('about/index', $data); 
		$this->view('templates/footer'); 	 
	} 
	public function __construct()
	{  
		if($_SESSION['session_login'] != 'sudah_login') { 
		Flasher::setMessage('Login','Tidak ditemukan.','danger'); 
		header('location: '. base_url . '/login'); 
		exit; 
        } 
    } 
} 