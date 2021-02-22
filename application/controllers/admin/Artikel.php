<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Artikel extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
		// proteksi halaman
		$this->admin_login->cek_login();
	}
	

	public function index()
	{
		// Load funtion listing di artikel model
		$artikel = $this->artikel_model->listing();

		$data = array( 	'title' 	=> 'Artikel',
						'artikel'	=> $artikel,
						'isi' 		=> 'admin/artikel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		// Validasi data yang mau di input
		$valid = $this->form_validation;

		$valid->set_rules('judul','Judul','required',
			array( 'required' => '%s harus di isi'
		));

		$valid->set_rules('deskripsi','Deskripsi','required',
			array( 'required' => '%s harus di isi'
		));

		if ($valid->run()) {
			$config['upload_path'] = './assets/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('gambar_artikel')) {
				$data = array(	'title'		=> 'Tambah Artikel',
								'error'		=> $this->upload->display_errors(),
								'isi'		=> 'admin/artikel/tambah'
							);
				$this->load->view('admin/layout/wrapper',$data, FALSE);
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
				// Slug produk
				$slug = url_title($this->input->post('judul'), 'dash', TRUE);

				$data = array(	'id_user'			=> $this->session->userdata('id_user'),
								'Judul' 			=> $i->post('judul'),
								'slug'				=> $slug,
								'gambar_artikel' 	=> $upload_gambar['upload_data']['file_name'],
								'deskripsi'			=> $i->post('deskripsi'),
								'artikel' 			=> $i->post('artikel'),
								'kategori' 			=> $i->post('kategori'),
								'status'			=> $i->post('status'),
								'tgl_post' 			=> date('Y-m-d')
							);
				$this->artikel_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Artikel telah ditambah..');
				redirect(base_url('admin/artikel'),'refresh');
			}
		}

		$data = array(	'title'	=> 'Tambah Artikel',
						'isi'	=> 'admin/artikel/tambah'
					);

		$this->load->view('admin/layout/wrapper', $data, FALSE);			
	}

	public function edit($id_artikel)
	{
		$artikel = $this->artikel_model->detail($id_artikel);

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('judul','Judul Artikel','required',
			array( 'required' => '%s harus di isi'
		));

		$valid->set_rules('deskripsi','Deskripsi','required',
			array( 'required' => '%s harus di isi'
		));

		if ($valid->run()) {
			if (! empty($_FILES['gambar_artikel']['name'])) {
				$config['upload_path'] = './assets/upload/image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';

				$this->load->library('upload', $config);

				if (! $this->upload->do_upload('gambar_artikel')) {
					$data = array(	'title'		=> 'Edit Artikel',
									'artikel'	=> $artikel,
									'error'		=> $this->upload->display_errors(),
									'isi'		=> 'admin/artikel/edit'
								);
					$this->load->view('admin/layout/wrapper',$data, FALSE);
				}else {
					$upload_gambar = array('upload_data'	=> $this->upload->data());

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
					//end create thumbnail

					$i = $this->input;
					// Slug produk
					$slug = url_title($this->input->post('judul'), 'dash', TRUE);

					$data = array(	'id_artikel'	=> $id_artikel,
									'id_user' => $this->session->userdata('id_user'),
									'Judul' => $i->post('judul'),
									'slug' => $slug,
									'gambar_artikel' => $upload_gambar['upload_data']['file_name'],
									'deskripsi' => $i->post('deskripsi'),
									'artikel' => $i->post('artikel'),
									'kategori' => $i->post('kategori'),
									'status' => $i->post('status'),
									'tgl_update' => date('Y-m-d')
								);
					$this->artikel_model->update($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit...');
					redirect(base_url('admin/artikel'),'refresh');
				}
			}else {
				$i = $this->input;
				// Slug produk
				$slug = url_title($this->input->post('judul'), 'dash', TRUE);

				$data = array( 	'id_artikel' => $id_artikel,
								'id_user' => $this->session->userdata('id_user'),
								'Judul' => $i->post('judul'),
								'slug' => $slug,
								'deskripsi' => $i->post('deskripsi'),
								'artikel' => $i->post('artikel'),
								'kategori' => $i->post('kategori'),
								'status' => $i->post('status'),
								'tgl_update' => date('Y-m-d')
							);
				$this->artikel_model->update($data);
				$this->session->set_flashdata('sukses', 'Data telah diedit...');
				redirect(base_url('admin/artikel'),'refresh');
			}
		}

		$data = array(	'title'		=> 'Edit User',
						'artikel'	=> $artikel,
						'isi'		=> 'admin/artikel/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);

	}

	public function delete($id_artikel)
	{
		// Proses Hapus gambar
		$artikel = $this->artikel_model->detail($id_artikel);
		unlink('./assets/upload/image/'.$artikel->gambar_artikel);
		unlink('./assets/upload/image/thumbs/'.$artikel->gambar_artikel);

		// End proses hapus gamabr
		$data = array('id_artikel' => $id_artikel);
		$this->artikel_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus...');
		redirect(base_url('admin/artikel'),'refresh');
	}
        
}
        
    /* End of file  Artikel.php */
        
                            
