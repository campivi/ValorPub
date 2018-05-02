<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Capacitacion extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Page_model');
			$this->load->model('Capacitacion_model');
			$this->load->model('Categoriacap_model');
			$this->load->model('Tipocap_model');
			$this->load->model('Comentarioc_model');

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
		$data['main_content'] = 'pages/capacitacion';
		$data['nav']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAllByState("2");
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function tipo(){
		$tip = urldecode($this->uri->segment(3));
		$data['main_content'] = 'pages/capacitacion';
		$data['nav']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$data['blogs']= $this->Capacitacion_model->filter(0, $tip);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function categoria(){
		$cat = urldecode($this->uri->segment(3));
		$data['main_content'] = 'pages/capacitacion';
		$data['nav']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$data['blogs']= $this->Capacitacion_model->filter($cat, 0);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function addComentarioCapacitacion()
	{
		$data['id_capacitacion'] = $_POST['id'];
		$data['nombre'] = $_POST['nombre'];
		$data['email'] = $_POST['email'];
		$data['mensaje'] = $_POST['mensaje'];
		$this->Comentarioc_model->insert($data);
	}

	public function filtroCapacitacion(){
		$cat = $_POST['cat'];
		$tip = $_POST['tip'];
		$list = $this->Capacitacion_model->filter($cat, $tip);
		$html = '';
		foreach ($list as $key => $value) {
			$html .= '<div class="item item_cap '.((($key + 1) % 2 == 0)?'no_margin_right':'').'">
				        <a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="img_item">
				          <img src="'.base_url().'uploads/'.$value->imagen_capacitacion.'" alt="">
				        </a>';
			$html .= '<div class="detail_item">';
			$day = strtotime($value->fecha);
			$html .= '<span class="time_item">'.date('d-m-Y',$day).'</span>';
            $tit = strip_tags($value->titulo_capacitacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
			$html .= '<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="title_item">'.$tit.'</a>';
            $det_capacitacion = strip_tags($value->descripcion_capacitacion);
            if (strlen($det_capacitacion) > 120) {
                $det_capacitacion = substr($det_capacitacion, 0, 120 - 3) . ' ...';
            } else {
                $det_capacitacion = $det_capacitacion;
            }
			$html .= '<div class="text_item">'.$det_capacitacion.'</div>
				        </div>
				      </div>';

		}
		$data['html'] = utf8_encode($html);
		$data['list'] = $list;
		echo json_encode($data);
	}

	public function getCapacitacionCategoria()
	{
		$this->load->helper('url');
		$cat = $_POST['cat'];
		$blogs= $this->Capacitacion_model->getAllByCategory($cat);
		$data['html'] = "";
		foreach ($blogs as $key => $value) {
			$day = strtotime($value->dia_capacitacion);
			switch ($value->categoria) {
        case "1":
          $cat = "CHARLAS";
          break;
        case "2":
          $cat = "SEMINARIOS";
          break;
        case "3":
          $cat = "TALLERES";
          break;
        default:
          $cat = "CURSOS";
          break;
      }
      $det_capacitacion = strip_tags($value->descripcion_capacitacion);
      if (strlen($det_capacitacion) > 130) {
          $det_capacitacion = substr($det_capacitacion, 0, 130 - 3) . ' ...';
      } else {
          $det_capacitacion = $det_capacitacion;
      }
			$data['html'] .= '<div class="item">
			<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="img_item">
				<img src="'.base_url().'uploads/'.$value->imagen_capacitacion.'" alt="">
			</a>
        <div class="detail_item">
        <a href="#" class="category_item">'.$cat.'</a>
        <span class="time_item">'.date('d-m-Y',$day).'</span>
        <a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="title_item">'.$value->titulo_capacitacion.'</a>
          <div class="text_item">'.$det_capacitacion.'</div>
        </div>
      </div>';
		}
		echo json_encode($data);
	}

	public function detail(){
		$uri = $this->uri->segment(3);
		$data['main_content'] = 'pages/detalle';
		$data['nav']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['detalle']= $this->Capacitacion_model->getByUri($uri);
		$data['intereses'] = $this->Capacitacion_model->getIntereses($data['detalle']->id_capacitacion);
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$data['capacitacion'] = "true";
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function addContadorCapacitacion(){
		$id = $_POST['id'];
		$detalle= $this->Capacitacion_model->find($id);
		$data['contador'] = intval($detalle->contador) + 1;
		$this->Capacitacion_model->update($data, $id);
	}

	public function capacitacionMasComentados(){
		$this->load->helper('url');
		$comentados= $this->Comentarioc_model->masComentados();
		foreach ($comentados as $key => $value) {
			$blogs[$key] = $this->Capacitacion_model->find($value->id_capacitacion);
		}
		$data['html'] = "";
		foreach ($blogs as $key => $value) {
			$data['html'] .= '
				<div class="item_aj">
					<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="img_aj left">
						<img src="'.base_url().'uploads/'.$value->imagen_capacitacion.'" alt="">
					</a>
					<div class="text_aj left"><span>'.($key + 1).'.</span>
					<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="link_aj">'.$value->titulo_capacitacion.'</a></div>
				</div>';
		}
		echo json_encode($data);
	}
	public function capacitacionMasVistos(){
		$this->load->helper('url');
		$blogs= $this->Capacitacion_model->masVistos();
		$data['html'] = "";
		foreach ($blogs as $key => $value) {
			$data['html'] .= '
				<div class="item_aj">
					<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="img_aj left">
						<img src="'.base_url().'uploads/'.$value->imagen_capacitacion.'" alt="">
					</a>
					<div class="text_aj left"><span>'.($key + 1).'.</span>
					<a href="'.base_url().'capacitacion/d/'.$value->uri.'" class="link_aj">'.$value->titulo_capacitacion.'</a></div>
				</div>';
		}
		echo json_encode($data);
	}	

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/capacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['active']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAll();
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function addCategoryCap()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['descripcion_categoria'] == "") {
				$data['errorc'] = "Todos campos con * son requeridos.";
			} else {
				$categoria['descripcion_categoria'] = $_POST['descripcion_categoria'];
				$this->Categoriacap_model->insert($categoria);
				$data['successc'] = "exito";
			}
		}
		$data['main_content'] = 'admin/capacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['active']= 'categoria';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAll();
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}


	public function addTipoCap()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['descripcion'] == "") {
				$data['errort'] = "Todos campos con * son requeridos.";
			} else {
				$categoria['descripcion'] = $_POST['descripcion'];
				$this->Tipocap_model->insert($categoria);
				$data['successt'] = "exito";
			}
		}
		$data['main_content'] = 'admin/capacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['active']= 'tipo';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAll();
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function edit()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				$page['titulo'] = $_POST['titulo'];
				$id = $_POST['id'];
				$this->Page_model->update($page, $id);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/capacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['active']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAll();
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function blog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/blogCapacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);

		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function addBlog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_capacitacion'] == "" || $_POST['descripcion_capacitacion'] == "" ||  $_POST['lugar_capacitacion'] == "" || 
				empty($_FILES['imagen_capacitacion']['name'])) {
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
				$this->upload->do_upload('imagen_capacitacion');
				$data_img = $this->upload->data();
				$page['imagen_capacitacion'] = $filename.$data_img['file_ext'];

				$page['titulo_capacitacion'] = $_POST['titulo_capacitacion'];
				$page['descripcion_capacitacion'] = $_POST['descripcion_capacitacion'];
				$day = strtotime($_POST['dia_capacitacion']);
				$page['dia_capacitacion'] = date('Y-m-d',$day);
				$page['hora_capacitacion'] = $_POST['hora_capacitacion'];
				$page['lugar_capacitacion'] = $_POST['lugar_capacitacion'];
				$page['categoria'] = $_POST['categoria'];
				$page['tipo'] = $_POST['tipo'];
				$page['estado'] = $_POST['estado'];
				$page['fuente'] = $_POST['fuente'];
				$page['titulo_fuente'] = $_POST['titulo_fuente'];
				$page['id_page'] = $_POST['id'];
				$page['fecha'] = date("Y-m-d");
				$page['uri'] = $this->create($_POST['titulo_capacitacion'], true);
				$id = $_POST['id'];
				$this->Capacitacion_model->insert($page);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/blogCapacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$this->load->view('includes_admin/template', $data);
	}

	public function editBlog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editBlogCapacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['id']= $id;
		$capacitacion= $this->Capacitacion_model->find($id);
		$day = strtotime($capacitacion->dia_capacitacion);
		$capacitacion->dia_capacitacion = date('d/m/Y',$day);
		$data['capacitacion']= $capacitacion;
		$data['tipos']= $this->Tipocap_model->getAll();

		$data['categorias']= $this->Categoriacap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function editCapacitacion(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_capacitacion'] == "" || $_POST['descripcion_capacitacion'] == "" ||  $_POST['lugar_capacitacion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if (!empty($_FILES['imagen_capacitacion']['name'])) {
					$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('imagen_capacitacion');
					$data_img = $this->upload->data();
					$page['imagen_capacitacion'] = $filename.$data_img['file_ext'];
				}

				$page['titulo_capacitacion'] = $_POST['titulo_capacitacion'];
				$page['descripcion_capacitacion'] = $_POST['descripcion_capacitacion'];
				$day = strtotime($_POST['dia_capacitacion']);
				$page['dia_capacitacion'] = date('Y-m-d',$day);
				$page['hora_capacitacion'] = $_POST['hora_capacitacion'];
				$page['lugar_capacitacion'] = $_POST['lugar_capacitacion'];
				$page['categoria'] = $_POST['categoria'];
				$page['tipo'] = $_POST['tipo'];
				$page['estado'] = $_POST['estado'];
				$page['fuente'] = $_POST['fuente'];
				$page['titulo_fuente'] = $_POST['titulo_fuente'];
				$page['id_page'] = $_POST['id'];
				$id = $_POST['id'];
				$this->Capacitacion_model->update($page, $id);
				$data['success'] = "exito";
			}
		}
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editBlogCapacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['id']= $id;
		$capacitacion= $this->Capacitacion_model->find($id);
		$day = strtotime($capacitacion->dia_capacitacion);
		$capacitacion->dia_capacitacion = date('d/m/Y',$day);
		$data['capacitacion']= $capacitacion;
		
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['tipos']= $this->Tipocap_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function delete(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Capacitacion_model->delete($id);
		$data['main_content'] = 'admin/capacitacion';
		$data['nav_admin']= 'capacitacion';
		$data['page']= $this->Page_model->find(3);
		$data['blogs']= $this->Capacitacion_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function order(){
		$id = $_POST['id'];
		$page['order_i'] = $_POST['order'];
		$this->Capacitacion_model->update($page, $id);
	}
    
    public function create($string, $unique = false)
    {
        if ($unique === true) {
            $uri = $this->_clear($string) . '-' .  $this->_uniqid();
        } else {
            $uri = $this->_clear($string);
        }        
        return $uri;
    }
    
    private function _clear($string)
    {
        $string = strtolower($string);
        $string = htmlentities($string, ENT_QUOTES, 'UTF-8');
        $string = 
        preg_replace(
            '~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', 
            '$1', 
            $string
        );
        $string = html_entity_decode($string, ENT_QUOTES, 'UTF-8');
        $string = preg_replace(array('~[^0-9a-z]~i', '~[ -]+~'), '-', $string);
        return trim($string, ' -');
    }
    
    private function _uniqid()
    {
        return substr(uniqid(), strlen(uniqid()) -4);
    }
	
}