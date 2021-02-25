<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tools_model extends CI_Model {
                        
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tools');
		$this->db->order_by('id_tool', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail User untuk edit data
	public function detail($id_tool){
		$this->db->select('*');
		$this->db->from('tools');
		$this->db->where('id_tool', $id_tool);
		$this->db->order_by('id_tool', 'asc');
		$query = $this->db->get();
		return $query->row();
	}

	// Total User
	public function total_tools(){
		$this->db->select('COUNT(*) AS total');
		$this->db->from('tools');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah Data tool
	public function tambah($data){
		$this->db->insert('tools', $data);
	}

	// Edit data tool
	public function edit($data){
		$this->db->where('id_tool', $data['id_tool']);
		$this->db->update('tools', $data);
	}

	// Delete data tool
	public function delete($data){
		$this->db->where('id_tool', $data['id_tool']);
		$this->db->delete('tools', $data);
	}
                        
                            
                        
}
                        
/* End of file Tools.php */
    
                        
