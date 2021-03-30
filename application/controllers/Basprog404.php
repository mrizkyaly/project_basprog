<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Basprog404 extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	

	public function index()
	{
		$this->output->set_status_header('404');
		$data = array(	'title' => '404',
						'isi' => 'err404'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
		
	}
        
}
        
    /* End of file  basprog404.php */
        
                            
