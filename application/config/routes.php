<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
//Consultoria
$route['default_controller'] = "home";
$route['nosotros'] = "nosotros";
$route['nuestro_enfoque'] = "enfoque";
$route['consultoria'] = "consultoria";
$route['se_parte_del_cambio'] = "cambio";
$route['herramientas'] = "herramientas";
$route['capacitacion'] = "capacitacion";
$route['investigacion'] = "investigacion";
$route['capacitacion/d/(:any)'] = "capacitacion/detail/$1";
$route['capacitacion/valoracion'] = "capacitacion/valoracion";
$route['capacitacion/getValoracion'] = "capacitacion/getValoracion";
$route['investigacion/d/(:any)'] = "investigacion/detail/$1";
$route['investigacion/valoracion'] = "investigacion/valoracion";
$route['investigacion/getValoracion'] = "investigacion/getValoracion";
$route['getProyectosCateroria'] = "consultoria/getProyectosCateroria";
$route['getCapacitacionCategoria'] = "capacitacion/getCapacitacionCategoria";
$route['addContadorCapacitacion'] = "capacitacion/addContadorCapacitacion";
$route['capacitacionMasVistos'] = "capacitacion/capacitacionMasVistos";
$route['addComentarioCapacitacion'] = "capacitacion/addComentarioCapacitacion";
$route['capacitacionMasComentados'] = "capacitacion/capacitacionMasComentados";
$route['addContadorInvestigacion'] = "investigacion/addContadorInvestigacion";
$route['investigacionMasVistos'] = "investigacion/investigacionMasVistos";
$route['investigacionMasValorados'] = "investigacion/investigacionMasValorados";
$route['filtroInvestigacion'] = "investigacion/filtroInvestigacion";
$route['filtroCapacitacion'] = "capacitacion/filtroCapacitacion";
$route['investigacion/tags/(:any)'] = "investigacion/tags/$1";
$route['search'] = "investigacion/search";
$route['contact/send'] = "home/send";


$route['admin'] = "usuario/index";
$route['admin/validate'] = "usuario/validate";
$route['admin/offline'] = "usuario/offline";

// Home
$route['admin/home_admin'] = "home/admin_index";
$route['admin/updateHome'] = "home/edit";
$route['admin/banner'] = "home/banner";
$route['admin/editBanner/(:any)'] = "home/editBanner/$1";
$route['admin/submitEditBanner/(:any)'] = "home/submitEditBanner/$1";
$route['admin/submitBanner'] = "home/submitBanner";
$route['admin/delete-banner'] = "home/delete";

// Consultoria
$route['admin/consultoria_admin'] = "consultoria/admin_index";
$route['admin/edit_consultoria'] = "consultoria/edit";
$route['admin/proyectoConsultoria'] = "consultoria/proyecto_consultoria";
$route['admin/addProyectoConsultoria'] = "consultoria/addProyectoConsultoria";
$route['admin/editProyectoConsultoria/(:any)'] = "consultoria/editProyectoConsultoria/$1";
$route['admin/editarProyectoConsultoria/(:any)'] = "consultoria/editarProyectoConsultoria/$1";
$route['admin/delete-proyecto'] = "consultoria/delete";
//Herramienta
$route['admin/herramienta_admin'] = "herramientas/admin_index";
$route['admin/edit_herramienta'] = "herramientas/edit";
$route['admin/proyectoHerramienta'] = "herramientas/proyecto_herramienta";
$route['admin/addProyectoHerramienta'] = "herramientas/addProyectoHerramienta";
$route['admin/editProyectoHerramienta/(:any)'] = "herramientas/editProyectoHerramienta/$1";
$route['admin/editarProyectoHerramienta/(:any)'] = "herramientas/editarProyectoHerramienta/$1";
$route['admin/delete-proyecto-herramienta'] = "herramientas/delete";
//capacitacion
$route['admin/capacitacion_admin'] = "capacitacion/admin_index";
$route['admin/edit_capacitacion'] = "capacitacion/edit";
$route['admin/blogCapacitacion'] = "capacitacion/blog";
$route['admin/addBlogCapacitacion'] = "capacitacion/addBlog";
$route['admin/editBlogCapacitacion/(:any)'] = "capacitacion/editBlog/$1";
$route['admin/editCapacitacion/(:any)'] = "capacitacion/editCapacitacion/$1";
$route['admin/delete-capacitacion'] = "capacitacion/delete";
$route['admin/addCategoryCap'] = "capacitacion/addCategoryCap";
$route['admin/addTipoCap'] = "capacitacion/addTipoCap";
//investigacion 
$route['admin/investigacion_admin'] = "investigacion/admin_index";
$route['admin/edit_investigacion'] = "investigacion/edit";
$route['admin/blogInvestigacion'] = "investigacion/blog";
$route['admin/addBlogInvestigacion'] = "investigacion/addBlog";
$route['admin/editBlogInvestigacion/(:any)'] = "investigacion/editBlog/$1";
$route['admin/editInvestigacion/(:any)'] = "investigacion/editInvestigacion/$1";
$route['admin/delete-investigacion'] = "investigacion/delete";

//Categoria 
$route['admin/categoria_admin'] = "categoria/admin_index";
$route['admin/addCategoria'] = "categoria/add";
$route['admin/submitCategoria'] = "categoria/submit";
$route['admin/delete-categoria'] = "categoria/delete";

//Tipo 
$route['admin/tipo_admin'] = "tipo/admin_index";
$route['admin/addTipo'] = "tipo/add";
$route['admin/submitTipo'] = "tipo/submit";
$route['admin/delete-tipo'] = "tipo/delete";

//Tipo Consultoria
$route['admin/tipoc_admin'] = "tipoc/admin_index";
$route['admin/submitTipoc'] = "tipoc/submit";
$route['admin/delete-tipoc'] = "tipoc/delete";

// Cambio
$route['admin/cambio_admin'] = "cambio/admin_index";
$route['admin/submit_cambio'] = "cambio/submit";

// nosotros 
$route['admin/nosotros_admin'] = "nosotros/admin_index";
$route['admin/submit_nosotros'] = "nosotros/submit";
$route['admin/equipo'] = "nosotros/equipo";
$route['admin/submitEquipo'] = "nosotros/submitEquipo";
$route['admin/delete-equipo'] = "nosotros/delete_equipo";
$route['admin/listEquipo'] = "nosotros/listEquipo";
$route['admin/editEquipo/(:any)'] = "nosotros/editEquipo/$1";
$route['admin/editSubmitEquipo/(:any)'] = "nosotros/editSubmitEquipo/$1";

$route['admin/aliado'] = "nosotros/aliado";
$route['admin/submitAliado'] = "nosotros/submitAliado";
$route['admin/delete-aliado'] = "nosotros/delete_aliado";
$route['admin/listAliado'] = "nosotros/listAliado";
$route['admin/editAliado/(:any)'] = "nosotros/editAliado/$1";
$route['admin/editSubmitAliado/(:any)'] = "nosotros/editSubmitAliado/$1";

//Enfoque 
$route['admin/enfoque_admin'] = "enfoque/admin_index";
$route['admin/submit_enfoque'] = "enfoque/submit_enfoque";
$route['admin/submit_enfoque_1'] = "enfoque/submit_enfoque_1";
$route['admin/submit_enfoque_2'] = "enfoque/submit_enfoque_2";
$route['admin/submit_enfoque_3'] = "enfoque/submit_enfoque_3";
$route['admin/addPoint/(:any)'] = "enfoque/addPoint/$1"; 
$route['admin/submitPoint/(:any)'] = "enfoque/submitPoint/$1"; 
$route['admin/delete-point'] = "enfoque/delete";
$route['admin/editPoint/(:any)'] = "enfoque/editPoint/$1"; 
$route['admin/submitEditPoint/(:any)'] = "enfoque/submitEditPoint/$1"; 


$route['admin/orderInvestigacion'] = "investigacion/order";

//consulta tipo
$route['investigacion/tip/(:any)'] = "investigacion/tipo/$1"; 
$route['investigacion/cat/(:any)'] = "investigacion/categoria/$1"; 
$route['capacitacion/tip/(:any)'] = "capacitacion/tipo/$1"; 
$route['capacitacion/cat/(:any)'] = "capacitacion/categoria/$1"; 



$route['admin/orderCapacitacion'] = "capacitacion/order";
$route['admin/updatePdf'] = "home/updatePdf";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */