<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Konfigurasi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		
	}
	
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('deskripsi_basprog','Deskripsi Laboratorium Bahsa Pemrograman ','required',
		array( 'deskripsi_basprog' =>'%s harus diisi'));

		$valid->set_rules('youtube','Link youtube','required',
		array( 'youtube' =>'%s harus diisi'));

		$valid->set_rules('instagram','Link instagram','required',
		array( 'instagram' =>'%s harus diisi'));

		$valid->set_rules('pendaftaran_aslab','Link Pendaftaran Aslab','required',
		array( 'pendaftaran_aslab' =>'%s harus diisi'));

		if($valid->run()===FALSE) {
			$data = array( 	'title' => 'Konfigurasi Website',
							'konfigurasi' => $konfigurasi,
							'isi' => 'admin/konfigurasi/list'
						);
			$this->load->view('admin/layout/wrapper', $data, FALSE);

			// Masuk database
			}else{
				$i = $this->input;
				$data = array( 	'deskripsi_basprog' =>$i->post('deskripsi_basprog'),
								'youtube' =>$i->post('youtube'),
								'instagram' =>$i->post('instagram'),
								'pendaftaran_aslab' =>$i->post('pendaftaran_aslab')
							);
				$this->konfigurasi_model->konfigurasi($data);
				$this->session->set_flashdata('sukses', 'Data telah ditambah');
				redirect(base_url('admin/konfigurasi'),'refresh');
		}
	}
        
}
        
    /* End of file  Konfigurasi.php */
        
                            
