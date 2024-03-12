<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['content']='home';
		$this->load->view('template',$data);
		
		
	

	}

	public function register(){
		
		$this->load->view('register');

	}
}

?>
