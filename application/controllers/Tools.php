<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Tools extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berkas_model');
		$this->load->model('tools_model');
	}
	

	public function index()
	{
		$berkas = $this->berkas_model->listing();
		$alat	= $this->tools_model->listing();

		$data = array( 	'title' 	=> 'Berkas & Alat | laboratorium Bahasa Pemrograman',
						'berkas'	=> $berkas,
						'alat'		=> $alat,
						'isi' 		=> 'tool/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
        
}
        
    /* End of file  Tools.php */
        
                            
