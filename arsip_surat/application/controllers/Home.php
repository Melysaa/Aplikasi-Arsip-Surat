<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->template->authlogin();
	}

	public function index()
	{
		$data = array(
			'hi' => "Selamat Datang Di Aplikasi Arsip Surat V1 By Melysa Anggita Rani"
			);
		$this->template->set('title',"home");
		$this->template->adminlte('layouts/home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */