<?php

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}
	}

	//function index(){
		//$this->load->view('admin');
	//}
	public function index()
	{
		$this->load->model('m_klinik');
		$klinik =$this->m_klinik->getklinik();
		$this->load->view('admin',array('klinik'=>$klinik));
	}

}
