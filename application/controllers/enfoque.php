<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enfoque extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Enfoque_model');
			$this->load->model('Punto_model');

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
		$data['main_content'] = 'pages/nuestro_enfoque';
		$data['nav']= 'enfoque';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/enfoque';
		$data['nav_admin']= 'enfoque';
		$data['active']= 'form';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$this->load->view('includes_admin/template', $data);
	}

	public function submit_enfoque()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo'] == "" || $_POST['descripcion'] == "" || $_POST['titulo_video'] == "" || $_POST['descripcion_video'] == "" || $_POST['url_video'] == "" ) {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$enfoque['titulo'] = $_POST['titulo'];
				$enfoque['descripcion'] = $_POST['descripcion'];
				$enfoque['titulo_video'] = $_POST['titulo_video'];
				$enfoque['descripcion_video'] = $_POST['descripcion_video'];
				$enfoque['url_video'] = $_POST['url_video'];
				$this->Enfoque_model->update($enfoque, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/enfoque';
		$data['nav_admin']= 'enfoque';
		$data['active']= 'form';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$this->load->view('includes_admin/template', $data);
	}

	public function submit_enfoque_1()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_block_1'] == "" || $_POST['titulo_1'] == "" || $_POST['descripcion_1'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$enfoque['titulo_block_1'] = $_POST['titulo_block_1'];
				$enfoque['titulo_1'] = $_POST['titulo_1'];
				$enfoque['descripcion_1'] = $_POST['descripcion_1'];
				$this->Enfoque_model->update($enfoque, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/enfoque';
		$data['nav_admin']= 'enfoque';
		$data['active']= 'block_1';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$this->load->view('includes_admin/template', $data);
	}

	public function submit_enfoque_2()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_block_2'] == "" || $_POST['titulo_2'] == "" || $_POST['descripcion_2'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$enfoque['titulo_block_2'] = $_POST['titulo_block_2'];
				$enfoque['titulo_2'] = $_POST['titulo_2'];
				$enfoque['descripcion_2'] = $_POST['descripcion_2'];
				$this->Enfoque_model->update($enfoque, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/enfoque';
		$data['nav_admin']= 'enfoque';
		$data['active']= 'block_2';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$this->load->view('includes_admin/template', $data);
	}

	public function submit_enfoque_3()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_block_3'] == "" || $_POST['titulo_3'] == "" || $_POST['descripcion_3'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$enfoque['titulo_block_3'] = $_POST['titulo_block_3'];
				$enfoque['titulo_3'] = $_POST['titulo_3'];
				$enfoque['descripcion_3'] = $_POST['descripcion_3'];
				$this->Enfoque_model->update($enfoque, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/enfoque';
		$data['nav_admin']= 'enfoque';
		$data['active']= 'block_3';
		$data['enfoque']= $this->Enfoque_model->find(1);
		$data['puntos_1'] = $this->Punto_model->findByCategoria("1");
		$data['puntos_2'] = $this->Punto_model->findByCategoria("2");
		$data['puntos_3'] = $this->Punto_model->findByCategoria("3");
		$this->load->view('includes_admin/template', $data);
	}
	
	public function addPoint(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$cat = $this->uri->segment(3);
		$data['categoria'] = $cat;
		$data['main_content'] = 'admin/addPoint';
		$data['nav_admin']= 'enfoque';
		$this->load->view('includes_admin/template', $data);
	}

	public function submitPoint(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$cat = $this->uri->segment(3);
		if ($_POST) {
			if ($_POST['descripcion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$point['descripcion'] = $_POST['descripcion'];
				$point['categoria'] = $cat;
				$this->Punto_model->insert($point);
				$data['success'] = "exito";
			}
		}
		$data['categoria'] = $cat;
		$data['main_content'] = 'admin/addPoint';
		$data['nav_admin']= 'enfoque';
		$this->load->view('includes_admin/template', $data);
	}

	public function editPoint(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['punto']= $this->Punto_model->find($id );
		$data['main_content'] = 'admin/editPoint';
		$data['nav_admin']= 'enfoque';
		$data['id']= $id;
		$this->load->view('includes_admin/template', $data);
	}

	public function submitEditPoint(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		if ($_POST) {
			if ($_POST['descripcion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$point['descripcion'] = $_POST['descripcion'];
				$this->Punto_model->update($point, $id);
				$data['success'] = "exito";
			}
		}
		$data['punto']= $this->Punto_model->find($id);
		$data['main_content'] = 'admin/editPoint';
		$data['nav_admin']= 'enfoque';
		$data['id']= $id;
		$this->load->view('includes_admin/template', $data);
	}

	public function delete()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Punto_model->delete($id);
	}

}