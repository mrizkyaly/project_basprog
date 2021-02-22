<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Beranda extends CI_Controller {

	public function index()
	{
		$data = array( 	'title' => 'laboratorium Bahasa Pemrograman',
						'isi' 	=> 'beranda/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
        
}
        
    /* End of file  beranda.php */
        
                            
