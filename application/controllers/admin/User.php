<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

	// Load Model User
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		// proteksi halaman
		$this->admin_login->cek_login();
	}

	public function index()
	{
		// Load function listing di user model
		$user = $this->user_model->listing();

		// Load view
		$data = array( 	'title' => 'Daftar User',
						'user' 	=> $user,
						'isi' 	=> 'admin/user/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Tambah User
	public function tambah()
	{
		// Validasi data yang mau di input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array( 'required' => '%s harus di isi'
		));

		$valid->set_rules('username','Username','required|min_length[5]|max_length[32]|is_unique[users.username]',
			array( 'required' => '%s harus di isi',
			'min_length' => '%s minimal 5 karakter',
			'max_length' => '%s maksimal 32 karakter',
			'is_unique' => '%s sudah ada silahkan buat username baru'
		));

		$valid->set_rules('password','Password','required',
			array( 'required' => '%s harus di isi'
		));

		if ($valid->run()) {
			$config['upload_path'] = './assets/upload/image/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2400'; //Dalam satuan kb
			$config['max_width'] = '2024';
			$config['max_height'] = '2024';

			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('gambar')) {
				$data = array(	'title'	=> 'Tambah user',
								'error'	=> $this->upload->display_errors(),
								'isi'	=> 'admin/user/tambah'
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
				$data = array(	'nama'		=> $i->post('nama'),
								'username'	=> $i->post('username'),
								'password' 	=> SHA1($i->post('password')),
								'gambar' 	=> $upload_gambar['upload_data']['file_name'],
								'level'		=> $i->post('level')
							);
				$this->user_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Data telah ditambahkan...');
				redirect(base_url('admin/user'),'refresh');
			}
		}
		$data = array( 	'title' 	=> 'Tambah User',
						'isi' 	=> 'admin/user/tambah'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Edit User
	public function edit($id_user)
	{
		// Ambil data user yang akan di edit
		$user = $this->user_model->detail($id_user);

		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array( 'required' => '%s harus di isi'
		));

		if ($valid->run()) {
			// check jika gambar diganti
			if (! empty($_FILES['gambar']['name'])) {
				$config['upload_path'] = './assets/upload/image/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '2400'; //Dalam satuan kb
				$config['max_width'] = '2024';
				$config['max_height'] = '2024';

				$this->load->library('upload', $config);

				if (! $this->upload->do_upload('gambar')) {
					$data = array(	'title'		=> 'Edit User ~ '.$user->nama,
									'user'		=> $user,	
									'error'		=> $this->upload->display_errors(),
									'isi'		=> 'admin/user/edit'
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
					$data = array( 	'id_user'	=> $id_user,
									'nama' 		=> $i->post('nama'),
									'username' 	=> $i->post('username'),
									'password' 	=> SHA1($i->post('password')),
									'gambar' 	=> $upload_gambar['upload_data']['file_name'],
									'level' 	=> $i->post('level')
									);

					$this->user_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit...');
					redirect(base_url('admin/user'),'refresh');
				}
			}else {
				$i = $this->input;
					$data = array( 	'id_user'	=> $id_user,
									'nama' 		=> $i->post('nama'),
									'username' 	=> $i->post('username'),
									'password' 	=> SHA1($i->post('password')),
									// 'gambar' 	=> $upload_gambar['upload_data']['file_name'],
									'level' 	=> $i->post('level')
									);

					$this->user_model->edit($data);
					$this->session->set_flashdata('sukses', 'Data telah diedit...');
					redirect(base_url('admin/user'),'refresh');
			}
		}
		$data = array(  'title'     => 'Edit User ~ '.$user->nama,
                        'user'    => $user,
                        'isi'       => 'admin/user/edit'
                    );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function delete($id_user)
	{
		// Proses Hapus gambar
		$user = $this->user_model->detail($id_user);
		unlink('./assets/upload/image/'.$user->gambar);
		unlink('./assets/upload/image/thumbs/'.$user->gambar);

		// End proses hapus gamabr
		$data = array('id_user' => $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus...');
		redirect(base_url('admin/user'),'refresh');
	}
}
        
    /* End of file  User.php */
        
                            
