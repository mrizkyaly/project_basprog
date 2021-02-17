<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Root extends CI_Controller {

	public function index()
	{
		//Validasi
		$this->form_validation->set_rules('username','Username','required',
		array( 'required' => '<strong>%s harus diisi</strong>'));

		$this->form_validation->set_rules('password','Password','required',
		array( 'required' => '<strong>%s harus diisi</strong>'));

		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// Proses ke simple login
			$this->admin_login->login($username,$password);
		}
		 // end validasi
		$data = array('title' => 'Login Admin' );
		$this->load->view('login/list', $data, FALSE);
	}

	// Fungsi log out
	public function logout()
	{
		// Ambil fungsi logout dari fungsi login
		$this->admin_login->logout();
	}
        
}
        
    /* End of file  Root.php */
        
                            
