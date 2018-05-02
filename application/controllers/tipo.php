<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Tipo_model');
		}
	public function index()
	{
		$data['main_content'] = 'pages/welcome_message';
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/tipo';
		$data['nav_admin']= 'tipo';
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function delete()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Tipo_model->delete($id);
	}

	public function submit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['descripcion_tipo'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$categoria['descripcion_tipo'] = $_POST['descripcion_tipo'];
				$this->Tipo_model->insert($categoria);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/tipo';
		$data['nav_admin']= 'tipo';
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}
	
}