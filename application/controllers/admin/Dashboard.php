<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Dashboard extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('artikel_model');
		$this->load->model('tools_model');
		$this->load->model('berkas_model');
	}
	

	public function index()
	{
		$jumlah_user = $this->user_model->total_user();
		$jumlah_artikel = $this->artikel_model->total_artikel();
		$jumlah_tools	= $this->tools_model->total_tools();
		$jumlah_berkas = $this->berkas_model->total_berkas();

		$data = array(	'title' => 'Dashboard',
						'jumlah_user' => $jumlah_user->total,
						'jumlah_artikel' => $jumlah_artikel->total,
						'jumlah_tools'	=> $jumlah_tools->total,
						'jumlah_berkas' => $jumlah_berkas->total,
						'isi' 	=> 'admin/dashboard/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
        
}
        
    /* End of file  Dashboard.php */
        
                            
