<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Konfigurasi_model extends CI_Model {
                        
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// View All data user
	public function listing(){
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$this->db->order_by('id_konfigurasi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}
	
	// Tambah Data user
	public function konfigurasi($data){
		$this->db->insert('konfigurasi', $data);
	}
							
                            
                        
}
                        
/* End of file Konfigurasi.php */
    
                        
