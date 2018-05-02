<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cambio extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Cambio_model');

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
		$data['main_content'] = 'pages/cambio';
		$data['nav']= 'cambio';
		$data['cambio']= $this->Cambio_model->find(1);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/cambio';
		$data['nav_admin']= 'cambio';
		$data['cambio']= $this->Cambio_model->find(1);
		$this->load->view('includes_admin/template', $data);
	}

	public function submit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_cambio'] == "" || $_POST['descripcion_cambio'] == "" || $_POST['url_video'] == "" || $_POST['titulo_como'] == "" || $_POST['descripcion_como'] == "" || $_POST['titulo_colaborando'] == "" || $_POST['descripcion_colaborando'] == "" || $_POST['titulo_difundiendo'] == "" || $_POST['descripcion_difundiendo'] == "" || $_POST['titulo_aplicando'] == "" || $_POST['descripcion_aplicando'] == "" || $_POST['titulo_unete'] == "" || $_POST['descripcion_unete'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$cambio['titulo_cambio'] = $_POST['titulo_cambio'];
				$cambio['descripcion_cambio'] = $_POST['descripcion_cambio'];
				$cambio['url_video'] = $_POST['url_video'];
				$cambio['titulo_como'] = $_POST['titulo_como'];
				$cambio['descripcion_como'] = $_POST['descripcion_como'];
				$cambio['titulo_colaborando'] = $_POST['titulo_colaborando'];
				$cambio['descripcion_colaborando'] = $_POST['descripcion_colaborando'];
				$cambio['titulo_difundiendo'] = $_POST['titulo_difundiendo'];
				$cambio['descripcion_difundiendo'] = $_POST['descripcion_difundiendo'];
				$cambio['titulo_aplicando'] = $_POST['titulo_aplicando'];
				$cambio['descripcion_aplicando'] = $_POST['descripcion_aplicando'];
				$cambio['titulo_unete'] = $_POST['titulo_unete'];
				$cambio['descripcion_unete'] = $_POST['descripcion_unete'];
				$this->Cambio_model->update($cambio, 1);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/cambio';
		$data['nav_admin']= 'cambio';
		$data['cambio']= $this->Cambio_model->find(1);
		$this->load->view('includes_admin/template', $data);
	}
	
}