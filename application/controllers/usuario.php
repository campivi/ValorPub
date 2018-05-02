<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('login')){
			redirect('admin/home_admin');
        }
        $this->load->view('admin/login');
	}
	public function validate()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "admin" && $password == "1234") {
			$data = array(
				'username' => $username,
				'login' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/home_admin');
		}
		else{
        	$this->load->view('admin/login');
		}
	}
	public function offline()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */