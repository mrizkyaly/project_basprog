<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Asistenlab extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	

	public function index()
	{
		// Load function listing di user model
		$user = $this->user_model->listing();

		$data = array( 'title' => 'Asisten Laboratorium | laboratorium Bahasa Pemrograman ',
						'user'	=> $user,
						'isi' => 'aslab/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
        
}
        
    /* End of file  Asistenlab.php */
        
                            
