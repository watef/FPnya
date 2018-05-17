<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('index');
	}
	public function services()
	{
		$this->load->helper('url');
		$this->load->view('services');
	}
	public function doctors()
	{
		$this->load->helper('url');
		$this->load->view('doctors');
	}
	public function about()
	{
		$this->load->helper('url');
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('contact');
	}
	public function galery()
	{
		$this->load->helper('url');
		$this->load->view('galery');
	}
	public function antri()
	{
		$this->load->helper('url');
		$this->load->view('antri');
	}
	public function admin()
	{
		$this->load->helper('url');
		$this->load->view('admin');
	}
	function logout(){
	$this->session->sess_destroy();
	redirect(base_url('login'));
}
}
