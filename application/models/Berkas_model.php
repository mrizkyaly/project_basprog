<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Berkas_model extends CI_Model {
                        
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('berkas');
		$this->db->order_by('id_berkas', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail User untuk edit data
	public function detail($id_berkas)
	{
		$this->db->select('*');
		$this->db->from('berkas');
		$this->db->where('id_berkas', $id_berkas);
		$this->db->order_by('id_berkas', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	// Total User
	public function total_berkas()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('berkas');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah Data berkas
	public function tambah($data)
	{
		$this->db->insert('berkas', $data);
	}

	// Edit data berkas
	public function edit($data)
	{
		$this->db->where('id_berkas', $data['id_berkas']);
		$this->db->update('berkas', $data);
	}

	// Delete data berkas
	public function delete($data)
	{
		$this->db->where('id_berkas', $data['id_berkas']);
		$this->db->delete('berkas', $data);
	}
	
                        
                            
                        
}
                        
/* End of file Berkas.php */
    
                        
