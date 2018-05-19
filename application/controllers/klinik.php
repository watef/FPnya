<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class klinik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_klinik');

	}
  public function antri()
	{
		$klinik =$this->m_klinik->getklinik();
		$this->load->view('antri',array('klinik'=>$klinik));
	}
}
