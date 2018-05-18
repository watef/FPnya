<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_klinik');
		$this->load->helper('url');
	}

	public function index()
	{

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
	$this->load->model('m_klinik');
	$klinik =$this->m_klinik->getklinik();
	$this->load->view('antri',array('klinik'=>$klinik));
	}
	/*public function admin()
	{
		$this->load->helper('url');
		$this->load->view('admin');
	}*/
	function logout(){
	$this->session->sess_destroy();
	redirect(base_url('login'));
}
public function added()
{

	$nama = $this->input->post('nama');
	$umur = $this->input->post('umur');
	$nohp = $this->input->post('nohp');
	$date = $this->input->post('date');
	$time = $this->input->post('time');
	$keluhan = $this->input->post('keluhan');

	$data = array(
		'nama' => $nama,
		'umur' => $umur,
		'nohp' => $nohp,
		'date' => $date,
		'time' => $time,
		'keluhan' => $keluhan
	);
	$this->load->model('m_klinik');
	$this->m_klinik->add($data,'klinik');
	redirect('Welcome/antri');
}
public function delete($id)
{
	$this->m_klinik->delete($id);
	redirect('admin');
}
	function edit($id) {
        $where = array('id' => $id);
        $data['klinik'] = $this->m_klinik->edit($where, 'klinik');
        $this->load->view('edit', $data);
    }
  function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $umur = $this->input->post('umur');
        $nohp = $this->input->post('nohp');
        $date = $this->input->post('date');
        $time = $this->input->post('time');
        $keluhan = $this->input->post('keluhan');
        $data = array(
            'nama' => $nama,
            'umur' => $umur,
            'nohp' => $nohp,
            'date' => $date,
            'time' => $time,
            'keluhan' => $keluhan
        );
        $where = array(
            'id' => $id
        );
				$this->load->model('m_klinik');
				$datas = $this->m_klinik->update($where, $data,'klinik');
				var_dump($id);
				//redirect('admin');
}
}
