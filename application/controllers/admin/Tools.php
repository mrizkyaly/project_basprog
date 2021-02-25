<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Tools extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tools_model');
	}
	

	public function index()
	{
		$tools = $this->tools_model->listing();

		$data = array( 'title' => 'Konfigurasi Peralatan',
						'tools'	=> $tools,
						'isi'	=> 'admin/tool/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}

	public function tambah()
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array( 'required' => '%s harus di isi'
		));

		$valid->set_rules('link','Nama','required',
			array( 'required' => '%s harus di isi'
		));

		if ($valid->run()) {
			$config['upload_path'] = './assets/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
			$config['max_size'] = '2400'; //Dalam satuan kb
			$config['max_width'] = '2024';
			$config['max_height'] = '2024';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('logo')) {
				$data = array(	'title'	=> 'Tambah Data',
								'error' => $this->upload->display_errors(),
								'isi'	=> 'admin/tool/tambah'
							);
				$this->load->view('admin/layout/wrapper', $data, FALSE);
			}else {
				$upload_gambar = array('upload_data' => $this->upload->data());

				// create thumbnail
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
				// Lokal folder thumbnail
				$config['new_image'] = './assets/upload/image/thumbs/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 250;//pixel
				$config['height'] = 250;//pixel
				$config['thumb_marker'] ='';

				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				// end create thumbnail

				$i = $this->input;
				$data = array( 	'logo' => $upload_gambar['upload_data']['file_name'],
								'nama' 	=> $i->post('nama'),
								'link'	=> $i->post('link'),
								'status'	=> $i->post('status')
							);
				$this->tools_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data telah ditambahkan...');
				redirect(base_url('admin/tools'),'refresh');
			}
		}
		$data = array(	'title' => 'Tambah Data',
						'isi'	=> 'admin/tool/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}

	public function edit($id_tool)
	{
		$tools = $this->tools_model->detail($id_tool);

		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
		array( 'required' => '%s harus di isi'
		));

		$valid->set_rules('link','Nama','required',
		array( 'required' => '%s harus di isi'
		));

		if ($valid -> run()) {
			if (! empty($_FILES['logo']['name'])) {
				$config['upload_path'] = './assets/upload/image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2400'; //Dalam satuan kb
				$config['max_width'] = '2024';
				$config['max_height'] = '2024';

				$this->load->library('upload', $config);
				
				if (! $this->upload->do_upload('logo')) {
					$data = array( 	'title'	=> 'Edit Data',
									'tools'	=> $tools,
									'error' => $this->upload->display_errors(),
									'isi'	=> 'admin/tool/edit'
								);
					$this->load->view('admin/layout/wrapper', $data, FALSE);
				}else {
					$upload_gambar = array('upload_data' => $this->upload->data());

					// create thumbnail
					$config['image_library'] = 'gd2';
					$config['source_image'] = './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
					// Lokal folder thumbnail
					$config['new_image'] = './assets/upload/image/thumbs/';
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width'] = 250;//pixel
					$config['height'] = 250;//pixel
					$config['thumb_marker'] ='';

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					// end create thumbnail

					$i = $this->input;
					$data = array(	'id_tool'	=> $id_tool,
									'logo' => $upload_gambar['upload_data']['file_name'],
									'nama' => $i->post('nama'),
									'link' => $i->post('link'),
									'status' => $i->post('status')
								);
					$this->tools_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit...');
					redirect(base_url('admin/tools'),'refresh');
				}
			}else {
				$i = $this->input;
				$data = array( 	'id_tool' => $id_tool,
								'nama' => $i->post('nama'),
								'link' => $i->post('link'),
								'status' => $i->post('status')
							);
							
				$this->tools_model->edit($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit...');
				redirect(base_url('admin/tools'),'refresh');
			}
		}
		$data = array( 	'title'	=> 'Edit data',
						'tools'	=> $tools,
						'isi'	=> 'admin/tool/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		
	}

	public function delete($id_tool)
	{
		// Proses Hapus gambar
		$tools = $this->tools_model->detail($id_tool);
		unlink('./assets/upload/image/'.$tools->logo);
		unlink('./assets/upload/image/thumbs/'.$tools->logo);

		// End proses hapus gamabr
		$data = array('id_tool' => $id_tool);
		$this->tools_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus...');
		redirect(base_url('admin/tools'),'refresh');
	}
        
}
        
    /* End of file  Tools.php */
        
                            
