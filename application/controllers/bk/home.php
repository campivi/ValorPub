<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Banner_model');
			$this->load->model('Page_model');
			$this->load->model('Investigacion_model');
			$this->load->model('Capacitacion_model');
			$this->load->model('Proyecto_model');
			$this->load->model('Categoria_model');
			$this->load->model('Tipo_model');
		}
	public function index()
	{
		$data['main_content'] = 'pages/home';
		$data['banner']= $this->Banner_model->getAll();
		$data['page_consultoria']= $this->Page_model->find(1);
		$data['page_herramienta']= $this->Page_model->find(2);
		$data['page_capacitacion']= $this->Page_model->find(3);
		$data['page_investigacion']= $this->Page_model->find(4);
		$data['page_home']= $this->Page_model->find(5);
		$data['investigaciones']= $this->Investigacion_model->LimitOrder(4);
		$data['proyecto_consultoria']= $this->Proyecto_model->LimitOrderByType(2, 1);
		$data['proyecto_herramientas']= $this->Proyecto_model->LimitOrderByType(2, 2);
		$data['lista_capacitacion']= $this->Capacitacion_model->LimitOrder(4);
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$data['pdf']= $this->Page_model->find(6);
		$data['nav']= 'home';
		$this->load->view('includes/template', $data);
	}

	public function send(){
		$this->load->library('email');
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];
		$this->email->from($email, $nombre);
		$this->email->to('dmcbride@valorpublico.org.pe'); 
		//$this->email->to('arturo.huisa@gmail.com'); 

		$this->email->subject('Contacto Valor Publico');
		$this->email->message(utf8_encode($mensaje));	

		$this->email->send();
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/home';
		$data['nav_admin']= 'home';
		$data['banner']= $this->Banner_model->getAll();
		$data['page']= $this->Page_model->find(5);
		$data['pdf']= $this->Page_model->find(6);
		$this->load->view('includes_admin/template', $data);
	}

	public function updatePdf(){
		if ($_POST) {
			if (!empty($_FILES['banner']['name'])) {
				$filename = "archive_".time()."_".time();
				$this->load->library('upload');
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $filename;
				$config['overwrite'] = TRUE;
				$config['max_size']	= '24000';
				$this->upload->initialize($config);
				$this->upload->do_upload('banner');
				$data_img = $this->upload->data();
				$pdf['banner'] = $filename.$data_img['file_ext'];
	 			$id = $_POST['id_page'];
				$data['success_pdf'] = "success";
				$this->Page_model->update($pdf, $id);
 			}
		}
		$data['main_content'] = 'admin/home';
		$data['nav_admin']= 'home';
		$data['banner']= $this->Banner_model->getAll();
		$data['page']= $this->Page_model->find(5);
		$data['pdf']= $this->Page_model->find(6);
		$this->load->view('includes_admin/template', $data);
	}

	public function edit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo'] == "" || $_POST['descripcion'] == "" || $_POST['banner'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$page['titulo'] = $_POST['titulo'];
				$page['descripcion'] = $_POST['descripcion'];
				$page['banner'] = $_POST['banner'];
				$id = 5;
				$this->Page_model->update($page, $id);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/home';
		$data['nav_admin']= 'home';
		$data['page']= $this->Page_model->find(5);
		$data['banner']= $this->Banner_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function editBanner(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editBanner';
		$data['id'] = $id;
		$data['nav_admin']= 'home';
		$data['banner'] = $this->Banner_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function submitEditBanner()
	{

		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		if ($_POST) {
			if (!empty($_FILES['imagen']['name'])) {
				$filename = "img_".time()."_".time();
				$this->load->library('upload');
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $filename;
				$config['overwrite'] = TRUE;
				$config['max_size']	= '24000';
				$this->upload->initialize($config);
				$this->upload->do_upload('imagen');
				$data_img = $this->upload->data();
				$banner['imagen'] = $filename.$data_img['file_ext'];
 			}
 			$data['success'] = "success";
			$banner['titulo'] = $_POST['titulo'];
			$banner['detalle'] = $_POST['detalle'];
			$banner['link'] = $_POST['link'];

			$this->Banner_model->update($banner, $id);
		}
		$data['main_content'] = 'admin/editBanner';
		$data['id'] = $id;
		$data['nav_admin']= 'home';
		$data['banner'] = $this->Banner_model->find($id);
		$this->load->view('includes_admin/template', $data);
	}

	public function banner()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/banner';
		$data['nav_admin']= 'home';
		$this->load->view('includes_admin/template', $data);
	}

	public function submitBanner(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if (empty($_FILES['imagen']['name'])) {
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
				$this->upload->do_upload('imagen');
				$data_img = $this->upload->data();
				$banner['imagen'] = $filename.$data_img['file_ext'];
				$banner['titulo'] = $_POST['titulo'];
				$banner['detalle'] = $_POST['detalle'];
				$banner['link'] = $_POST['link'];
				$data['success'] = "success";
				$this->Banner_model->insert($banner);
 			}
		}
		$data['main_content'] = 'admin/banner';
		$data['nav_admin']= 'home';
		$this->load->view('includes_admin/template', $data);
	}

	public function delete()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Banner_model->delete($id);
	}
	
}