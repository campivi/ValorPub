<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Cambio_model');
			$this->load->model('Nosotros_model');
			$this->load->model('Equipo_model');
			$this->load->model('Aliado_model');
			$this->load->model('Page_model');
		}
	public function index()
	{
		$data['nav']= 'nosotros';
		$data['main_content'] = 'pages/nosotros';
		$data['nosotros']= $this->Nosotros_model->find(1);
		$data['equipo']= $this->Equipo_model->getAll();
		$data['aliado']= $this->Aliado_model->getAll();
		$data['pdf']= $this->Page_model->find(6);
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/nosotros';
		$data['nav_admin']= 'nosotros';
		$data['nosotros']= $this->Nosotros_model->find(1);
		$data['equipo']= $this->Equipo_model->getAll();
		$data['aliado']= $this->Aliado_model->getAll();
		$data['active']= "form";
		$this->load->view('includes_admin/template', $data);
	}

	public function listEquipo()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/nosotros';
		$data['nav_admin']= 'nosotros';
		$data['nosotros']= $this->Nosotros_model->find(1);
		$data['equipo']= $this->Equipo_model->getAll();
		$data['aliado']= $this->Aliado_model->getAll();
		$data['active']= "equipo";
		$this->load->view('includes_admin/template', $data);
	}

	public function listAliado()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/nosotros';
		$data['nav_admin']= 'nosotros';
		$data['nosotros']= $this->Nosotros_model->find(1);
		$data['equipo']= $this->Equipo_model->getAll();
		$data['aliado']= $this->Aliado_model->getAll();
		$data['active']= "aliado";
		$this->load->view('includes_admin/template', $data);
	}

	public function submit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_nosotros'] == "" || $_POST['descripcion_nosotros'] == "" || $_POST['titulo_nos_dirigimos'] == "" || $_POST['descripcion_nos_dirigimos'] == "" || $_POST['subtitulo_valores'] == "" || $_POST['titulo_valores'] == "" || $_POST['descripcion_valores'] == "" || $_POST['titulo_vision'] == "" || $_POST['titulo_misional'] == "" || $_POST['descripcion_misional'] == "" || $_POST['titulo_institucional'] == "" || $_POST['descripcion_institucional'] == "" || $_POST['titulo_nuestro_equipo'] == "" || $_POST['titulo_aliados'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$nosotros['titulo_nosotros'] = $_POST['titulo_nosotros'];
				$nosotros['descripcion_nosotros'] = $_POST['descripcion_nosotros'];
				$nosotros['titulo_nos_dirigimos'] = $_POST['titulo_nos_dirigimos'];
				$nosotros['descripcion_nos_dirigimos'] = $_POST['descripcion_nos_dirigimos'];
				$nosotros['subtitulo_valores'] = $_POST['subtitulo_valores'];
				$nosotros['titulo_valores'] = $_POST['titulo_valores'];
				$nosotros['descripcion_valores'] = $_POST['descripcion_valores'];
				$nosotros['titulo_vision'] = $_POST['titulo_vision'];
				$nosotros['titulo_misional'] = $_POST['titulo_misional'];
				$nosotros['descripcion_misional'] = $_POST['descripcion_misional'];
				$nosotros['titulo_institucional'] = $_POST['titulo_institucional'];
				$nosotros['descripcion_institucional'] = $_POST['descripcion_institucional'];
				$nosotros['titulo_nuestro_equipo'] = $_POST['titulo_nuestro_equipo'];
				$nosotros['titulo_aliados'] = $_POST['titulo_aliados'];
				$this->Nosotros_model->update($nosotros, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/nosotros';
		$data['nav_admin']= 'nosotros';
		$data['nosotros']= $this->Nosotros_model->find(1);
		$data['active']= "form";
		$this->load->view('includes_admin/template', $data);	
	}

	public function equipo()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/equipo';
		$data['nav_admin']= 'nosotros';
		$this->load->view('includes_admin/template', $data);
	}
	public function submitEquipo()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['nombre'] == "" || $_POST['cargo'] == "" || $_POST['descripcion'] == "" || empty($_FILES['imagen_equipo']['name'])) {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$filename = "img_".time()."_".time();
				$this->load->library('upload');
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $filename;
				$config['overwrite'] = TRUE;
				$config['max_size']	= '24000';
				$this->upload->initialize($config);
				$this->upload->do_upload('imagen_equipo');
				$data_img = $this->upload->data();
				$nosotros['imagen_equipo'] = $filename.$data_img['file_ext'];

				$nosotros['nombre'] = $_POST['nombre'];
				$nosotros['cargo'] = $_POST['cargo'];
				$nosotros['descripcion'] = $_POST['descripcion'];

				$this->Equipo_model->insert($nosotros);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/equipo';
		$data['nav_admin']= 'nosotros';
		$this->load->view('includes_admin/template', $data);
	}

	public function editEquipo(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editEquipo';
		$data['nav_admin']= 'nosotros';
		$data['id']= $id;
		$data['equipo']= $this->Equipo_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function editSubmitEquipo(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		if ($_POST) {
			if ($_POST['nombre'] == "" || $_POST['cargo'] == "" || $_POST['descripcion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if (!empty($_FILES['imagen_equipo']['name'])) {
					$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('imagen_equipo');
					$data_img = $this->upload->data();
					$nosotros['imagen_equipo'] = $filename.$data_img['file_ext'];
				}
				$nosotros['nombre'] = $_POST['nombre'];
				$nosotros['cargo'] = $_POST['cargo'];
				$nosotros['descripcion'] = $_POST['descripcion'];

				$this->Equipo_model->update($nosotros, $id);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/editEquipo';
		$data['nav_admin']= 'nosotros';
		$data['id']= $id;
		$data['equipo']= $this->Equipo_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function delete_equipo(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Equipo_model->delete($id);
	}
	



	public function aliado()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/aliado';
		$data['nav_admin']= 'nosotros';
		$this->load->view('includes_admin/template', $data);
	}
	public function submitAliado()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['nombre'] == "" || $_POST['descripcion'] == "" || $_POST['link_colaborador'] == "" || empty($_FILES['imagen_colaborador']['name'])) {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$filename = "img_".time()."_".time();
				$this->load->library('upload');
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $filename;
				$config['overwrite'] = TRUE;
				$config['max_size']	= '24000';
				$this->upload->initialize($config);
				$this->upload->do_upload('imagen_colaborador');
				$data_img = $this->upload->data();
				$aliado['imagen_colaborador'] = $filename.$data_img['file_ext'];

				$aliado['nombre'] = $_POST['nombre'];
				$aliado['descripcion'] = $_POST['descripcion'];
				$aliado['link_colaborador'] = $_POST['link_colaborador'];

				$this->Aliado_model->insert($aliado);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/aliado';
		$data['nav_admin']= 'nosotros';
		$this->load->view('includes_admin/template', $data);
	}

	public function editAliado(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editAliado';
		$data['nav_admin']= 'nosotros';
		$data['id']= $id;
		$data['aliado']= $this->Aliado_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function editSubmitAliado(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		if ($_POST) {
			if ($_POST['nombre'] == "" || $_POST['descripcion'] == "" ||  $_POST['link_colaborador'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if (!empty($_FILES['imagen_equipo']['name'])) {
					$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('imagen_equipo');
					$data_img = $this->upload->data();
					$nosotros['imagen_equipo'] = $filename.$data_img['file_ext'];
				}
				$nosotros['nombre'] = $_POST['nombre'];
				$nosotros['link_colaborador'] = $_POST['link_colaborador'];
				$nosotros['descripcion'] = $_POST['descripcion'];

				$this->Aliado_model->update($nosotros, $id);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/editAliado';
		$data['nav_admin']= 'nosotros';
		$data['id']= $id;
		$data['aliado']= $this->Aliado_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function delete_aliado(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Aliado_model->delete($id);
	}
	
}