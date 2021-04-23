<?php 

require_once(dirname(__FILE__).'../../../../config/config.inc.php'); 
require_once(dirname(__FILE__).'../../../../init.php');


$pd_buscador_top = Module::getInstanceByName('pd_buscador_top');
$valor = Tools::getValue("valor");
$lista_servicios = $pd_buscador_top->getListaServicios($valor);

ob_start(); 
require_once 'tmpl/tmpl_result_busqueda.php'; 
$tmpl_result_busqueda = ob_get_clean(); 
ob_end_flush();

echo($tmpl_result_busqueda);


 ?>