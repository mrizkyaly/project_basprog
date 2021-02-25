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
		$this->load->view('err404');
	}
        
}
        
    /* End of file  basprog404.php */
        
                            
