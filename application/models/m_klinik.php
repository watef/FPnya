<?php if(! defined('BASEPATH'))exit('No direct script access allowed');
class m_klinik extends CI_Model
{
	public function getklinik()
	{
		$query = $this->db->get('klinik');
		return $query->result_array();
	}
	public function get_data_id($id)
	{
			$query = $this->db->get_where('klinik',array('id'=>$id));
			return $query->row_array();
	}
	public function add($id,$table)
	{
		$this->db->insert($table,$id);
	}
	public function delete($id)
	{
		return $this->db->delete('klinik',array('id'=>$id));

	}
}
