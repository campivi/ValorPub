<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipoc extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Tipoc_model');
			$this->load->model('Page_model');
			$this->load->model('Proyecto_model');
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
		$data['main_content'] = 'admin/consultoria';
		$data['nav_admin']= 'consultoria';
		$data['active']= 'consultoria';
		$data['tipos']= $this->Tipoc_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function delete()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Tipoc_model->delete($id);
	}

	public function submit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_tipoc'] == "" || $_POST['descripcion_tipoc'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$categoria['titulo_tipoc'] = $_POST['titulo_tipoc'];
				$categoria['descripcion_tipoc'] = $_POST['descripcion_tipoc'];
				$this->Tipoc_model->insert($categoria);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/consultoria';
		$data['nav_admin']= 'consultoria';
		$data['active']= 'tipo';
		$data['page']= $this->Page_model->find(1);
		$data['tipos']= $this->Tipoc_model->getAll();
		$data['proyectos']= $this->Proyecto_model->getbyPage(1);
		$this->load->view('includes_admin/template', $data);
	}
	
}