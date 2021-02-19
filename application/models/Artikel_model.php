<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Artikel_model extends CI_Model {
                        
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// View All data artikel
	public function listing()
	{
		$this->db->select('artikel.*,
						users.nama,
						users.jabatan,
						users.gambar');
		$this->db->from('artikel');
		$this->db->join('users', 'users.id_user = artikel.id_user', 'left');
		
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->result();
					
	}

	// Detail data artikel untuk edit
	public function detail($id_artikel)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_artikel', $id_artikel);
		$this->db->order_by('id_artikel', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function tambah($data)
	{
		$this->db->insert('artikel', $data);
		
	}

	public function update($data)
	{
		$this->db->where('id_artikel', $data['id_artikel']);
		$this->db->update('artikel', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_artikel', $data['id_artikel']);
		$this->db->delete('artikel', $data);
	}

	
	
                        
                            
                        
}
                        
/* End of file Artikel.php */
    
                        
