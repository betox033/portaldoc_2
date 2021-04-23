<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Pd_buscador extends Module implements WidgetInterface
{
    protected $config_form = false;
    private $templateFile;

    public function __construct()
    {
        $this->name = 'pd_buscador';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'BoxProject - Roberto Rodriguez';
        $this->need_instance = 1;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('PortalDoc - Buscador general');
        $this->description = $this->l('Muestra un filtro y un listado de posibles exámenes, descripciones y valores');

        $this->confirmUninstall = $this->l('Estas seguro que deseas desinstalar este modulo?');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:pd_buscador/pd_buscador.tpl';
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('PD_BUSCADOR_LIVE_MODE', false);

        include(dirname(__FILE__).'/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        Configuration::deleteByName('PD_BUSCADOR_LIVE_MODE');

        include(dirname(__FILE__).'/sql/uninstall.php');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitPd_buscadorModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        $output = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output.$this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitPd_buscadorModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Live mode'),
                        'name' => 'PD_BUSCADOR_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Use this module in live mode'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Enter a valid email address'),
                        'name' => 'PD_BUSCADOR_ACCOUNT_EMAIL',
                        'label' => $this->l('Email'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'PD_BUSCADOR_ACCOUNT_PASSWORD',
                        'label' => $this->l('Password'),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'PD_BUSCADOR_LIVE_MODE' => Configuration::get('PD_BUSCADOR_LIVE_MODE', true),
            'PD_BUSCADOR_ACCOUNT_EMAIL' => Configuration::get('PD_BUSCADOR_ACCOUNT_EMAIL', 'contact@prestashop.com'),
            'PD_BUSCADOR_ACCOUNT_PASSWORD' => Configuration::get('PD_BUSCADOR_ACCOUNT_PASSWORD', null),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path.'views/js/back.js');
            $this->context->controller->addCSS($this->_path.'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path.'/views/js/front.js');
        $this->context->controller->addCSS($this->_path.'/views/css/front.css');
    }

    public function renderWidget($hookName, array $params){
        /*if (!$this->isCached($this->templateFile, $this->getCacheId('ps_banner'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        }
        return $this->fetch($this->templateFile, $this->getCacheId('ps_banner'));*/
        $this->smarty->assign($this->getWidgetVariables($hookName, $params));
        return $this->fetch($this->templateFile, null);
    }

    public function getWidgetVariables($hookName, array $params){
        $id_cms_pd_buscador = Tools::getValue("id_cms");

        if($id_cms_pd_buscador == 6){
            $lista_especialidades = $this->getListaEspecialidades();
            $lista_fonasa = $this->getListaFonasa();
            $lista_isapre = $this->getListaIsapre();
            $lista_seguros = $this->getListaSeguros();
            $lista_cajas = $this->getListaCajas();
            $lista_convenios = $this->getListaConvenios();
            $lista_ciudades = $this->getListaCiudades();
            $lista_servicios = $this->getListaServicios();

            $esp_default = Tools::getValue("esp"); $serv_default = Tools::getValue("serv");
        }else{
            $lista_especialidades = array(); $lista_fonasa = array(); $lista_isapre = array();
            $lista_seguros = array(); $lista_cajas = array(); $lista_convenios = array();
            $esp_default = ""; $lista_ciudades = array(); $lista_servicios = array();
            $serv_default = "";
        }


        return array(
            'ruta_controller_pd_buscador' => $this->_path . 'ajax_controllers/',
            'id_cms_pd_buscador' => $id_cms_pd_buscador,
            'ruta_img_pd_buscador' => $this->_path . 'img/',
            'lista_especialidades' => $lista_especialidades,
            'lista_fonasa' => $lista_fonasa,
            'lista_isapre' => $lista_isapre,
            'lista_seguros' => $lista_seguros,
            'lista_cajas' => $lista_cajas,
            'lista_convenios' => $lista_convenios,
            'esp_default' => $esp_default,
            'lista_ciudades' => $lista_ciudades,
            'lista_servicios' => $lista_servicios,
            'serv_default' => $serv_default,
        );
    }

    public function getListaEspecialidades(){
        $sql = "select * from apd_especialidad where estado=true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaFonasa(){
        $sql = "select * from apd_fonasa where estado=true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaIsapre(){
        $sql = "select * from apd_isapre where estado=true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaSeguros(){
        $sql = "select * from apd_seguro where estado=true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaCajas(){
        $sql = "select * from apd_caja where estado=true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaConvenios(){
        $sql = "select * from apd_convenio where estado = true order by orden";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;
    }

    public function getListaCiudades(){
        $url = "http://cargaora.starken.cl/StarkenServices/StarkenServices?WSDL";
        $client = new SoapClient($url, [ "trace" => 1 ] );
        $resultado = $client->listarCiudadesOrigen();
        $lista_ciudades = $resultado->return->listaCiudadesOrigen;
        return $lista_ciudades;
    }

    public function getListaServicios(){
    	$sql = "select * from apd_servicio where estado=true";
        $results = Db::getInstance()->ExecuteS($sql);
        return $results;    	
    }

    public function getDatosServicio($id_servicio){
    	$sql = "select * from apd_servicio where id=" . $id_servicio;
    	$row = Db::getInstance()->getRow($sql);
    	return $row;
    }
}
