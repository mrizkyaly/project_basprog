<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Beranda extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
	}
	

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		$data = array( 	'title' => 'laboratorium Bahasa Pemrograman',
						'deskripsi'	=> $site->deskripsi_basprog,
						'daftarAslab' => $site->pendaftaran_aslab,
						'isi' 	=> 'beranda/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
        
}
        
    /* End of file  beranda.php */
        
                            
