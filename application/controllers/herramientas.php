<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Herramientas extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Page_model');
			$this->load->model('Proyecto_model');

			$this->load->library('twitterfetcher');

	        $this->tweets = $this->twitterfetcher->getTweets(array(
	            'consumerKey'       => 'fDcYpGCxfANX79TKriar29KeH',
	            'consumerSecret'    => '5eS9cSa029GO7mR1Hu4BHWqxtMmNz3QjXXCj76qDN1XbvELuXR',
	            'accessToken'       => '1551649603-XWiCCIXWFin6qD8cdcd0hxMmGG0CnMR92Ylzjsr',
	            'accessTokenSecret' => 'SyiZUHDaONW54zuh2cvWiQ3EkZDXvYQNxla9L4ozudYN7',
	            'usecache'          => true,
	            'count'             => 5,  //this how many tweets to fectch
	            'numdays'           => 600
	        ));
		}
	public function index()
	{
		$data['main_content'] = 'pages/herramientas';
		$data['page']= $this->Page_model->find(2);
		$data['proyectos']= $this->Proyecto_model->getbyPageandType(2, "1");
		$data['nav']= 'herramientas';
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/herramienta';
		$data['nav_admin']= 'herramientas';
		$data['page']= $this->Page_model->find(2);
		$data['proyectos']= $this->Proyecto_model->getbyPage(2);
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
		$data['main_content'] = 'admin/herramienta';
		$data['nav_admin']= 'herramientas';
		$data['page']= $this->Page_model->find(2);
		$data['proyectos']= $this->Proyecto_model->getbyPage(2);
		$this->load->view('includes_admin/template', $data);
	}

	public function proyecto_herramienta(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/addProyectoHerramienta';
		$data['nav_admin']= 'herramientas';
		$data['page']= $this->Page_model->find(2);
		$this->load->view('includes_admin/template', $data);
	}
	public function addProyectoHerramienta(){
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
		$data['main_content'] = 'admin/addProyectoHerramienta';
		$data['nav_admin']= 'herramientas';
		$data['page']= $this->Page_model->find(2);
		$this->load->view('includes_admin/template', $data);
	}

	public function editProyectoHerramienta(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editProyectoHerramienta';
		$data['nav_admin']= 'herramientas';
		$data['id'] = $id;
		$data['page']= $this->Page_model->find(2);
		$data['proyecto'] = $this->Proyecto_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function editarProyectoHerramienta(){
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
		$data['main_content'] = 'admin/editProyectoHerramienta';
		$data['nav_admin']= 'herramientas';
		$data['id'] = $id;
		$data['page']= $this->Page_model->find(2);
		$data['proyecto'] = $this->Proyecto_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function delete(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Proyecto_model->delete($id);
		$data['main_content'] = 'admin/herramienta';
		$data['nav_admin']= 'herramientas';
		$data['page']= $this->Page_model->find(2);
		$data['proyectos']= $this->Proyecto_model->getbyPage(2);
		$this->load->view('includes_admin/template', $data);
	}

}