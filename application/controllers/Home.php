<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Computer','com');
	}
	

	public function Index()
	{
		$data['query'] = $this->com->Show_Data();
		$this->load->view('Home',$data);
	}


}
