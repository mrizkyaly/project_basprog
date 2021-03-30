<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Berita extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
	}
	

	public function index()
	{
		// Load funtion listing di artikel model
		$artikel = $this->artikel_model->listing();

		$aktif = 'active';

		$data = array( 	'title' 	=> 'Berita | laboratorium Bahasa Pemrograman',
						'artikel'	=> $artikel,
						'aktif'		=> $aktif,
						'isi' 		=> 'berita/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function detail($slug=null)
	{
		$artikel = $this->artikel_model->read($slug);

		if($artikel=="" || $slug==null)
		{
			$this->output->set_status_header('404');
			$data = array(	'title' => '404',
							'isi' => 'err404'
						);
			$this->load->view('layout/wrapper', $data, FALSE);
			
		} else {
			$data = array( 	'title' => $artikel->judul,
							'artikel' => $artikel,
							'isi' => 'berita/detail'
						);
			$this->load->view('layout/wrapper', $data, FALSE);
		}
	}
        
}
        
    /* End of file  Berita.php */
        
                            
