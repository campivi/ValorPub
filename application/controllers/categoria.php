<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Categoria_model');
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
		$data['main_content'] = 'admin/categoria';
		$data['nav_admin']= 'categoria';
		$data['categorias']= $this->Categoria_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function delete()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Categoria_model->delete($id);
	}

	public function submit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['descripcion_categoria'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$categoria['descripcion_categoria'] = $_POST['descripcion_categoria'];
				$this->Categoria_model->insert($categoria);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/categoria';
		$data['nav_admin']= 'categoria';
		$data['categorias']= $this->Categoria_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}
	
}