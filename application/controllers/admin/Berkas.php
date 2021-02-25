<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Berkas extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('berkas_model');
	}
	

	public function index()
	{
		$berkas = $this->berkas_model->listing();

		$data = array( 	'title' => 'Konfigurasi Berkas',
						'berkas' => $berkas,
						'isi' => 'admin/berkas/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
		array( 'nama' =>'%s harus diisi'));

		$valid->set_rules('link','Link','required',
		array( 'link' =>'%s harus diisi'));

		if ($valid->run()===FALSE) {
			$data = array( 	'title' => 'Konfigurasi Berkas',
							'isi'	=> 'admin/berkas/tambah'
						);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		}else {
			$i = $this->input;
			$data = array(	'nama'	 	=> $i->post('nama'),
							'link'		=> $i->post('link'),
							'kategori'	=> $i->post('kategori'),
							'status'	=> $i->post('status')
						);
			$this->berkas_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/berkas'),'refresh');
		}
	}

	public function edit($id_berkas)
	{
		$berkas = $this->berkas_model->detail($id_berkas);

		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
		array( 'nama' =>'%s harus diisi'));

		$valid->set_rules('link','Link','required',
		array( 'link' =>'%s harus diisi'));

		if($valid->run()===FALSE) {
			$data = array( 	'title' => 'Edit Berkas',
							'berkas' => $berkas,
							'isi' => 'admin/berkas/edit'
						);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_berkas' => $id_berkas,
							'nama' 		=> $i->post('nama'),
							'link' 		=> $i->post('link'),
							'kategori'	=> $i->post('kategori'),
							'status' 	=> $i->post('status')
						);
			$this->berkas_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/berkas'),'refresh');
		}
	}

	public function delete($id_berkas)
	{
		$data = array('id_berkas' => $id_berkas);
		$this->berkas_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus...');
		redirect(base_url('admin/berkas'),'refresh');
	}
        
}
        
    /* End of file  Berkas.php */
        
                            
