<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultoria extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Page_model');
			$this->load->model('Proyecto_model');
			$this->load->model('Tipoc_model');
			$this->load->model('Tipoc_model');
		}
	public function index()
	{
		$data['main_content'] = 'pages/consultoria';
		$data['page']= $this->Page_model->find(1);
		$data['tipos']= $this->Tipoc_model->getAll();
		$data['proyectos']= $this->Proyecto_model->getbyPageandType(1, "1");
		$data['nav']= 'consultoria';
		$this->load->view('includes/template', $data);
	}

	public function getProyectosCateroria(){
		$this->load->helper('url');
		$cat = $_POST['cat'];
		$page = $_POST['pag'];
		$proyectos= $this->Proyecto_model->getbyPageandType($page, $cat);
		$data['html'] = '';
		foreach ($proyectos as $key => $value) {
			$data['html'] .= '';
			$data['html'] .= '<div class="block_consultoria">';
      $data['html'] .= '  <div class="img_consultoria left">';
      $data['html'] .= '    <img src="'. base_url().'uploads/'.$value->banner_proyecto.'" alt="">';
      $data['html'] .= '  </div>';
      $data['html'] .= '  <div class="detail_consultoria">';
      $data['html'] .= '    <h4>'.$value->titulo_proyecto.'</h4>';
      $data['html'] .= '    <div class="text_consultoria">'.$value->descripcion_proyecto.'</div>';
      if ($value->tipo_proyecto == "1") {
      $data['html'] .= '    <p class="t_desarrollo">Proyecto en desarrollo </p>';
      } else {
      $data['html'] .= '    <a href="'.$value->web_proyecto.'" class="link_web">'.$value->web_proyecto.'</a>';
      }
      $data['html'] .= '  </div>';
      $data['html'] .= '</div>';
		}
		echo json_encode($data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/consultoria';
		$data['nav_admin']= 'consultoria';
		$data['active']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$data['proyectos']= $this->Proyecto_model->getbyPage(1);
		$data['tipos']= $this->Tipoc_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function edit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo'] == "" || $_POST['descripcion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if(!empty($_FILES['banner']['name'])){
					$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('banner');
					$data_img = $this->upload->data();
					$page['banner'] = $filename.$data_img['file_ext'];
				}
				$page['titulo'] = $_POST['titulo'];
				$page['descripcion'] = $_POST['descripcion'];
				$id = $_POST['id'];
				$this->Page_model->update($page, $id);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/consultoria';
		$data['nav_admin']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$data['proyectos']= $this->Proyecto_model->getbyPage(1);
		$this->load->view('includes_admin/template', $data);
	}

	public function proyecto_consultoria(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/addProyectoConsultoria';
		$data['nav_admin']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$this->load->view('includes_admin/template', $data);
	}
	public function addProyectoConsultoria(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_proyecto'] == "" || $_POST['descripcion_proyecto'] == "" || empty($_FILES['banner_proyecto']['name'])) {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if ($_POST['tipo_proyecto'] == "2" && $_POST['web_proyecto'] == "") {
					$data['error'] = "Si el tipo de proyecto es 'Nuevo proyecto' el campo web no puede ser vacío.";
				}
				else{
				$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('banner_proyecto');
					$data_img = $this->upload->data();
					$project['banner_proyecto'] = $filename.$data_img['file_ext'];

					$project['titulo_proyecto'] = $_POST['titulo_proyecto'];
					$project['descripcion_proyecto'] = $_POST['descripcion_proyecto'];
					$project['web_proyecto'] = $_POST['web_proyecto'];
					$project['tipo_proyecto'] = $_POST['tipo_proyecto'];
					$project['id_page'] = $_POST['id'];
					$id = $_POST['id'];
					$this->Proyecto_model->insert($project, $id);
					$data['success'] = "exito";
				}
			}
		}
		$data['main_content'] = 'admin/addProyectoConsultoria';
		$data['nav_admin']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$this->load->view('includes_admin/template', $data);
	}

	public function editProyectoConsultoria(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editProyectoConsultoria';
		$data['id'] = $id;
		$data['nav_admin']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$data['proyecto'] = $this->Proyecto_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function editarProyectoConsultoria(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			$id = $_POST['id'];
			if ($_POST['titulo_proyecto'] == "" || $_POST['descripcion_proyecto'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if ($_POST['tipo_proyecto'] == "2" && $_POST['web_proyecto'] == "") {
					$data['error'] = "Si el tipo de proyecto es 'Nuevo proyecto' el campo web no puede ser vacío.";
				}
				else{
					if(!empty($_FILES['banner_proyecto']['name'])){
						$filename = "img_".time()."_".time();
						$this->load->library('upload');
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = '*';
						$config['file_name'] = $filename;
						$config['overwrite'] = TRUE;
						$config['max_size']	= '24000';
						$this->upload->initialize($config);
						$this->upload->do_upload('banner_proyecto');
						$data_img = $this->upload->data();
						$project['banner_proyecto'] = $filename.$data_img['file_ext'];
					}
					$project['titulo_proyecto'] = $_POST['titulo_proyecto'];
					$project['descripcion_proyecto'] = $_POST['descripcion_proyecto'];
					$project['web_proyecto'] = $_POST['web_proyecto'];
					$project['tipo_proyecto'] = $_POST['tipo_proyecto'];
					$id = $_POST['id'];
					$this->Proyecto_model->update($project, $id);
					$data['success'] = "exito";
				}
			}
		}
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editProyectoConsultoria';
		$data['nav_admin']= 'consultoria';
		$data['id'] = $id;
		$data['page']= $this->Page_model->find(1);
		$data['proyecto'] = $this->Proyecto_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function delete(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Proyecto_model->delete($id);
		$data['main_content'] = 'admin/consultoria';
		$data['nav_admin']= 'consultoria';
		$data['page']= $this->Page_model->find(1);
		$data['proyectos']= $this->Proyecto_model->getbyPage(1);
		$this->load->view('includes_admin/template', $data);
	}

}