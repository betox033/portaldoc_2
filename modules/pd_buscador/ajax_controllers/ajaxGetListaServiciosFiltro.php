<?php 


require_once(dirname(__FILE__).'../../../../config/config.inc.php'); 
require_once(dirname(__FILE__).'../../../../init.php');


$id_servicio = 1;

if(Tools::isSubmit("id_servicio")){
	$id_servicio = Tools::getValue("id_servicio");

	if($id_servicio == null || !$id_servicio || $id_servicio == "null"){
		$id_servicio = 1;
	}
}else{
	$id_servicio = 1;
}



$lista_servicios = array(
	array('logo' => "logo-blanco.png"),
	array('logo' => "logo_redsalud.png"),
	array('logo' => "logo-1.png"),
	array('logo' => "foto_0000000920150703153201.png"),
	array('logo' => "logo-clinica-alemana.svg"),
	array('logo' => "logo.png"),
	array('logo' => "CSM_logo_slogan_20171020_02.png"),
);

$pd_buscador = Module::getInstanceByName('pd_buscador');
$servicio_general = $pd_buscador->getDatosServicio($id_servicio);

ob_start(); 
require_once 'tmpl/tmpl_lista_servicios_2.php'; 
$tmpl_lista_servicios = ob_get_clean(); 
ob_end_flush();

echo($tmpl_lista_servicios);









 ?>