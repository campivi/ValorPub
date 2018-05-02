<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigacion extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Page_model');
			$this->load->model('Investigacion_model');
			$this->load->model('Categoria_model');
			$this->load->model('Tipo_model');
			$this->load->model('Investigacionuser_model');
			$this->load->model('Capacitacion_model');
			$this->load->model('Categoriacap_model');

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
		$data['main_content'] = 'pages/investigacion';
		$data['nav']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['tipos']= $this->Tipo_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['blogs']= $this->Investigacion_model->getAllByState("2");
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function tipo(){
		$tip = urldecode($this->uri->segment(3));
		$data['main_content'] = 'pages/investigacion';
		$data['nav']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['tipos']= $this->Tipo_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['blogs']= $this->Investigacion_model->filter(0, $tip);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function categoria(){
		$cat = urldecode($this->uri->segment(3));
		$data['main_content'] = 'pages/investigacion';
		$data['nav']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['tipos']= $this->Tipo_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['blogs']= $this->Investigacion_model->filter($cat, 0);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function filtroInvestigacion()
	{
		$cat = $_POST['cat'];
		$tip = $_POST['tip'];
		$list = $this->Investigacion_model->filter($cat, $tip);
		$html = '';
		foreach ($list as $key => $value) {
			$html .= '<div class="item '.((($key + 1) % 2 == 0)?'no_margin_right':'').'">
				        <a href="'.base_url().'investigacion/d/'.$value->uri.'" class="img_item">
				          <img src="'.base_url().'uploads/'.$value->imagen_investigacion.'" alt="">
				        </a>';
			$html .= '<div class="detail_item">';
			$day = strtotime($value->fecha_investigacion);
			$html .= '<span class="time_item">'.date('d-m-Y',$day).'</span>';
            $tit = strip_tags($value->titulo_investigacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
			$html .= '<a href="'.base_url().'investigacion/d/'.$value->uri.'" class="title_item">'.$tit.'</a>';
            $det_capacitacion = strip_tags($value->descripcion_investigacion);
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

	public function tags(){
		if(!$this->session->userdata('login')){
			redirect('admin');
    }
		$tags = urldecode($this->uri->segment(3));
		$data['main_content'] = 'pages/tagsI';
		$data['nav']= 'investigacion';
		$data['list']= $this->Investigacion_model->getTags($tags);
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function search(){
		$word = $_POST['word'];
		$data['list_i']= $this->Investigacion_model->search($word);
		$data['list_c']= $this->Capacitacion_model->search($word);
		
		$data['categorias']= $this->Categoriacap_model->getAll();
		$data['main_content'] = 'pages/search';
		$data['nav']= 'investigacion';
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function admin_index()
	{
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/investigacion';
		$data['nav_admin']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['blogs']= $this->Investigacion_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
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
		$data['main_content'] = 'admin/investigacion';
		$data['nav_admin']= 'investigacion';
		$data['blogs']= $this->Investigacion_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function blog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$data['main_content'] = 'admin/blogInvestigacion';
		$data['nav_admin']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function addBlog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_investigacion'] == "" || $_POST['descripcion_investigacion'] == "" || empty($_FILES['imagen_investigacion']['name'])) {
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
				$this->upload->do_upload('imagen_investigacion');
				$data_img = $this->upload->data();
				$page['imagen_investigacion'] = $filename.$data_img['file_ext'];

				$page['titulo_investigacion'] = $_POST['titulo_investigacion'];
				$page['descripcion_investigacion'] = $_POST['descripcion_investigacion'];
				$page['id_categoria'] = $_POST['id_categoria'];
				$page['id_tipo'] = $_POST['id_tipo'];
				$page['estado_investigacion'] = $_POST['estado_investigacion'];
				$page['tags'] = $_POST['tags'];
				$page['fuente'] = $_POST['fuente'];
				$page['titulo_fuente'] = $_POST['titulo_fuente'];
				$page['fecha_investigacion'] = date("Y-m-d");
				$page['uri'] = $this->create($_POST['titulo_investigacion'], true);
				$this->Investigacion_model->insert($page);
				$data['success'] = "exito";
			}
		}
		$data['main_content'] = 'admin/blogInvestigacion';
		$data['nav_admin']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function editBlog(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editBlogInvestigacion';
		$data['nav_admin']= 'investigacion';
		$data['id']= $id;
		$data['investigacion'] = $this->Investigacion_model->find($id);
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function editInvestigacion(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		if ($_POST) {
			if ($_POST['titulo_investigacion'] == "" || $_POST['descripcion_investigacion'] == "") {
				$data['error'] = "Todos campos con * son requeridos.";
			} else {
				if (!empty($_FILES['imagen_investigacion']['name'])) {
					$filename = "img_".time()."_".time();
					$this->load->library('upload');
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = '*';
					$config['file_name'] = $filename;
					$config['overwrite'] = TRUE;
					$config['max_size']	= '24000';
					$this->upload->initialize($config);
					$this->upload->do_upload('imagen_investigacion');
					$data_img = $this->upload->data();
					$page['imagen_investigacion'] = $filename.$data_img['file_ext'];
				}

				$page['titulo_investigacion'] = $_POST['titulo_investigacion'];
				$page['descripcion_investigacion'] = $_POST['descripcion_investigacion'];
				$page['id_categoria'] = $_POST['id_categoria'];
				$page['id_tipo'] = $_POST['id_tipo'];
				$page['estado_investigacion'] = $_POST['estado_investigacion'];
				$page['tags'] = $_POST['tags'];
				$page['fuente'] = $_POST['fuente'];
				$page['titulo_fuente'] = $_POST['titulo_fuente'];
				$id = $this->uri->segment(3);
				$this->Investigacion_model->update($page, $id);
				$data['success'] = "exito";
			}
		}
		$id = $this->uri->segment(3);
		$data['main_content'] = 'admin/editBlogInvestigacion';
		$data['nav_admin']= 'investigacion';
		$data['id']= $id;
		$data['investigacion'] = $this->Investigacion_model->find($id);
		$data['categorias']= $this->Categoria_model->getAll();
		$data['tipos']= $this->Tipo_model->getAll();
		$this->load->view('includes_admin/template', $data);
	}

	public function delete(){
		if(!$this->session->userdata('login')){
			redirect('admin');
        }
		$id = $_POST['id'];
		$this->Investigacion_model->delete($id);
	}

	public function detail(){
		$uri = $this->uri->segment(3);
		$data['main_content'] = 'pages/detalle_i';
		$data['nav']= 'investigacion';
		$data['page']= $this->Page_model->find(4);
		$data['detalle']= $this->Investigacion_model->getByUri($uri);
		$data['intereses'] = $this->Investigacion_model->getIntereses($data['detalle']->id_investigacion);
		$data['tipos']= $this->Tipo_model->getAll();
		$data['categorias']= $this->Categoria_model->getAll();
		$data['compartir'] = "true";
		$data['investigacion'] = "true";
		$data['twiites'] = $this->tweets;
		$this->load->view('includes/template', $data);
	}

	public function valoracion()
	{
		$data['id_investigacion'] = $_POST['id'];
		$data['valoracion'] = $_POST['rating'];
		$data['id_user'] = $_POST['user'];
		$this->Investigacionuser_model->insert($data);
	}

	public function getValoracion()
	{
		$data['id_investigacion'] = $_POST['id'];
		$data['user'] = $_POST['user'];
		$response = $this->Investigacionuser_model->find_by($data['id_investigacion'], $data['user']);
		if (empty($response)) {
			$r['rating'] = 0;	
		}
		else{
			$r['rating'] = $response[0]->valoracion;
		}
		echo json_encode($r);
	}

	public function addContadorInvestigacion(){
		$id = $_POST['id'];
		$detalle= $this->Investigacion_model->find($id);
		$data['contador'] = intval($detalle->contador) + 1;
		$this->Investigacion_model->update($data, $id);
	}

	public function investigacionMasValorados()
	{
		$this->load->helper('url');
		$blogs= $this->Investigacionuser_model->masValorados();
		$data['html'] = "";
		$list = "";
		foreach ($blogs as $key => $value) {
			$list[$key] = $this->Investigacion_model->find($value->id_investigacion);
		}
		foreach ($list as $key => $value) {
			$tit = strip_tags($value->titulo_investigacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
			$data['html'] .= '
				<div class="item_aj">
					<a href="'.base_url().'investigacion/d/'.$value->uri.'" class="img_aj left">
						<img src="'.base_url().'uploads/'.$value->imagen_investigacion.'" alt="">
					</a>
					<div class="text_aj left"><span>'.($key + 1).'.</span>
					<a href="'.base_url().'investigacion/d/'.$value->uri.'" class="link_aj">'.$tit.'</a></div>
				</div>';
		}
		echo json_encode($data);
	}

	public function investigacionMasVistos(){
		$this->load->helper('url');
		$blogs= $this->Investigacion_model->masVistos();
		$data['html'] = "";
		foreach ($blogs as $key => $value) {
			$tit = strip_tags($value->titulo_investigacion);
            if (strlen($tit) > 50) {
                $tit = substr($tit, 0, 50 - 3) . ' ...';
            } else {
                $tit = $tit;
            }
			$data['html'] .= '
				<div class="item_aj">
					<a href="'.base_url().'investigacion/d/'.$value->uri.'" class="img_aj left">
						<img src="'.base_url().'uploads/'.$value->imagen_investigacion.'" alt="">
					</a>
					<div class="text_aj left"><span>'.($key + 1).'.</span>
					<a href="'.base_url().'investigacion/d/'.$value->uri.'" class="link_aj">'.$tit.'</a></div>
				</div>';
		}
		echo json_encode($data);
	}

	public function order(){
		$id = $_POST['id'];
		$page['order_i'] = $_POST['order'];
		$this->Investigacion_model->update($page, $id);
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