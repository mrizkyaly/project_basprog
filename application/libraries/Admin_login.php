<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Admin_login
{
                        
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
		// Load data model user
		$this->CI->load->model('user_model');;
	}

	// Fungsi Login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);

		// Jika ada data user,Maka create session login
		if($check) {
			$id_user	= $check->id_user;
			$nama		= $check->nama;
			$level		= $check->level;
			$gambar		= $check->gambar;

			// Create session
			$this->CI->session->set_userdata('id_user',$id_user);
			$this->CI->session->set_userdata('nama',$nama);
			$this->CI->session->set_userdata('username',$username);
			$this->CI->session->set_userdata('level',$level);
			$this->CI->session->set_userdata('gambar',$gambar);

			// Redirect ke halaman admin yang di proteksi
			redirect(base_url('admin/dashboard'),'refresh');
		}else{
			// kalau tidak ada(Usernama & password salah),maka suruh login lagi
			$this->CI->session->set_flashdata('warning', '<strong>Username atau Password salah !!</strong>');
			redirect(base_url('root'),'refresh');
		}
	}

	// Fungsi cek login
	public function cek_login()
	{
		// Memerikah apakah sudah login
		if ($this->CI->session->userdata('username') == "") {
			$this->CI->session->set_flashdata('warning', '<strong>Anda belum login....</strong>');
			redirect(base_url('root'),'refresh');
		}
	}

	// Fungsi Log out
	public function logout()
	{
		// Membuang semua session
		$this->CI->session->unset_userdata('id_user');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('level');
		$this->CI->session->unset_userdata('gambar');

		// Setelah session dibuang,redirect ke login
		$this->CI->session->set_flashdata('sukses', '<strong>Anda berhasil logout....</strong>');
		redirect(base_url('root'),'refresh');
	}
                        
                            
}
                                                
/* End of file admin_login.php */
    
                        
