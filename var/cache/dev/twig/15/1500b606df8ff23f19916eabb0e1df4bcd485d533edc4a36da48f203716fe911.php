<?php

/* __string_template__d2ba3d2bb53602d3dc06e907b69fc5633fea2cba5c18b625e8478290e676cfc9 */
class __TwigTemplate_df69609f2f87bb33f36a7c786d09d41333851578b61fb52f53e1318bcfdce903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__d2ba3d2bb53602d3dc06e907b69fc5633fea2cba5c18b625e8478290e676cfc9"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__d2ba3d2bb53602d3dc06e907b69fc5633fea2cba5c18b625e8478290e676cfc9"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/portaldoc/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/portaldoc/img/app_icon.png\" />

<title>Gestor de módulos • PortalDoc</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '1e9a167aa8dc7fc3584fd8d627e2972f';
    var token_admin_orders = 'b4c3162bc8606624ae261a839880bc68';
    var token_admin_customers = '7ae823c86cd29ba13e3afe1d15d869c9';
    var token_admin_customer_threads = '114e14611b3c8d9bcabad3984b5a8e25';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '79b1e0b876477aaec3e702917cb19b76';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/portaldoc/admin732hw8ye9/index.php/improve/modules/catalog/recommended?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/portaldoc/admin732hw8ye9/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/admin732hw8ye9/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/portaldoc\\/admin732hw8ye9\\/\";
var baseDir = \"\\/portaldoc\\/\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"peso chileno\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-es adminmodulesmanage\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4f1439492ed0fab2a8d389d5da0f860b\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item active\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?token=949f15f94b73047d2427702f0c0a400a\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCategories&amp;addcategory&amp;token=981780e2920edb0ecffd190a8d1416f2\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php/sell/catalog/products/new?token=949f15f94b73047d2427702f0c0a400a\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4bc78efd2421c2476f14fa7108166334\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=1554d2449c8728aaf5b217c48324c27a\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"86\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminQuickAccesses&token=7da6316a6b7147eba8f6190c229882fc\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar de acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminQuickAccesses&token=7da6316a6b7147eba8f6190c229882fc\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/portaldoc/admin732hw8ye9/index.php?controller=AdminSearch&amp;token=fac3a9d6849c9f5e3b7e44647f40cc0d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\"
           href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/performance/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Modo depuración</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://robertorodriguez.cl/portaldoc/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Y si incluyes algunos descuentos de temporada?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40boxproject.cl.jpg\" />
      <span>Admin BoxProject</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=79b1e0b876477aaec3e702917cb19b76\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminLogin&amp;logout=1&amp;token=6de6805597021538ce4ef646b4d649b3\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/orders/invoices/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminSlip&amp;token=d489984484c1525419fe90242249d38e\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/orders/delivery-slips/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarts&amp;token=75b365204024dc64182c80c7b5ff9269\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/catalog/products?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/catalog/products?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCategories&amp;token=981780e2920edb0ecffd190a8d1416f2\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTracking&amp;token=2587a26d9815eb8e8a934da12e41e24d\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAttributesGroups&amp;token=3d6ba638edb109d379491f205c18bfd3\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminManufacturers&amp;token=5d2e9c892b380a6e1ec71c5cb002676f\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAttachments&amp;token=219b0eaea7e6c7d2921082f9c7e2db90\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCartRules&amp;token=4bc78efd2421c2476f14fa7108166334\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/stocks/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomers&amp;token=7ae823c86cd29ba13e3afe1d15d869c9\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomers&amp;token=7ae823c86cd29ba13e3afe1d15d869c9\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAddresses&amp;token=7fbc9449bd25a92ea6352eb19304f1de\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomerThreads&amp;token=114e14611b3c8d9bcabad3984b5a8e25\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomerThreads&amp;token=114e14611b3c8d9bcabad3984b5a8e25\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrderMessage&amp;token=82c33fbd943965332c9c66fc4efa6052\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminReturn&amp;token=dc4b0cdf45b4e19b1a530dab6453d13c\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminStats&amp;token=4f1439492ed0fab2a8d389d5da0f860b\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/modules/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/modules/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminThemes&amp;token=07a311a82e8e1d0b56293f73369e260c\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminThemes&amp;token=07a311a82e8e1d0b56293f73369e260c\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/themes/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCmsContent&amp;token=1362f12a9dbe0db2e9118a919d3bc0a0\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/design/modules/positions/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminImages&amp;token=b434296a409674f03ead9a1342d8aaf4\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminLinkWidget&amp;token=e4fa5c5338724bdca2a58214a18bed72\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarriers&amp;token=8fb6a0a36d6a580aadbd47433a3f4827\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarriers&amp;token=8fb6a0a36d6a580aadbd47433a3f4827\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/shipping/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/payment_methods?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/payment_methods?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/localization/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/localization/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminZones&amp;token=061ff6d0b851572596e23c5f63033fb2\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTaxes&amp;token=ada5268562493eeb9e059c0de6300a5c\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/translations/settings?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmarketing&amp;token=59f5f279f21c4a3979e083636b1fe33a\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/preferences/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/preferences/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/order-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/product-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/customer-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminContacts&amp;token=4dd0335948b125cd86471ace879f920e\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/seo-urls/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminSearchConf&amp;token=7a46e2d0a452e8c669f1881b9d526d69\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminGamification&amp;token=b382dce41f7bfd25a3cc662cc8d0c212\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/system-information/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/system-information/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/performance/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/administration/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/emails/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/import/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmployees&amp;token=79b1e0b876477aaec3e702917cb19b76\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminRequestSql&amp;token=e78798594048ce19b19165a85a85bfc4\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/logs/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminWebservice&amp;token=a1de6d5aa12e2415b162628a13b0b15c\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"144\" id=\"tab-AdminFieldMenu\">
              <span class=\"title\">FIELDTHEMES</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"145\" id=\"subtab-AdminFieldMenuSecond\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldThemeCustomizerConfig&amp;token=496e5ba69fd87e124e7de14dfe4167dc\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    FieldThemes Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-145\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminFieldThemeCustomizerConfig\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldThemeCustomizerConfig&amp;token=496e5ba69fd87e124e7de14dfe4167dc\" class=\"link\"> Manage Theme Customizer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminFieldSizechart\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldSizechart&amp;token=cd688559c5f8dd9a18b62c4065ee3ffc\" class=\"link\"> Config Sizechart
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminFieldBlockSearch\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldBlockSearch&amp;token=02c6410d5f1d1722c5d5c1afdd70d5e6\" class=\"link\"> Quick search block
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminFieldMegamenu\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldMegamenu&amp;token=499810475bcc111fb78c2e2453eb3731\" class=\"link\"> Manage Megamenu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-AdminFieldSlideshow\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldSlideshow&amp;token=a27e87c514422d677b21e8bc901cd876\" class=\"link\"> Manage Slideshow
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-AdminPopupNewsletter\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminPopupNewsletter&amp;token=9fef5ad6226d7f1b60a8f5b4dc88fdef\" class=\"link\"> Popup newsletter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-AdminFieldBrandSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldBrandSlider&amp;token=6a63e90e4a941f99e54199cb68a98b3e\" class=\"link\"> Configuge brands
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminFieldstaticblocks\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldstaticblocks&amp;token=5f552ef518eb530092d12a22fc46a957\" class=\"link\"> Manage Staticblocks
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminFieldstaticfooter\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldstaticfooter&amp;token=0bed529656ce0f96bcc55b978fad00ab\" class=\"link\"> Manage Static Footer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminFieldTopSellers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldTopSellers&amp;token=c35251e0f9cfb60c6555b6f7ffebae94\" class=\"link\"> Configure top sellers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminFieldFeaturedProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldFeaturedProductSlider&amp;token=798d31d1f82638b311fd8a0db7752132\" class=\"link\"> Configure featured products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminFieldOneCateProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldOneCateProductSlider&amp;token=24a3708bd627d89a8fc10d9516511ef1\" class=\"link\"> Configure one categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminFieldNewProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldNewProductSlider&amp;token=94166bbbcf40cddd2f5f0ff2d3da64d0\" class=\"link\"> Configure new products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-AdminFieldProductCates\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldProductCates&amp;token=671069b9ba20b22979c3171dd2d76197\" class=\"link\"> Configure product cates
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminFieldTabCateSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldTabCateSlider&amp;token=fe82aad38602f7336df42f1e71f1d16a\" class=\"link\"> Configure tabcateslider
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminFieldElevatezoom\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldElevatezoom&amp;token=365a5da28b007efb16b621d211837ab0\" class=\"link\"> Config Elevatezoom
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminTestimonial\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTestimonial&amp;token=e7fb3cdf37efe0db0310e00ac592145c\" class=\"link\"> Manage Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"163\" id=\"subtab-AdminFieldVMegaMenu\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldVMegaMenu&amp;token=0a7067a4df73408d7c00e4c683dc6959\" class=\"link\"> Manage Vertical Megamenu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-AdminModules&configure=productcomments\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminModules&amp;configure=productcomments&amp;token=6614872c7f7956e4fc3efa91ad9a57f0\" class=\"link\"> Config ProductComments
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminSmartBlog\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogCategory&amp;token=370a65b852ae783658cbff0a2535433f\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    SmartBlog Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-165\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-AdminBlogCategory\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogCategory&amp;token=370a65b852ae783658cbff0a2535433f\" class=\"link\"> Blog Category
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"167\" id=\"subtab-AdminBlogcomment\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogcomment&amp;token=3a2243f249eb41fada8e7eb431543a2a\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-AdminBlogPost\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogPost&amp;token=3d12444cd8c021bdd06aa7bf425e4255\" class=\"link\"> Blog Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminImageType\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminImageType&amp;token=63bc48267998587e7787893e8b7f5713\" class=\"link\"> Image Type
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"170\" id=\"subtab-AdminAboutUs\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAboutUs&amp;token=10de367db18445bbd5fcc04753c90791\" class=\"link\"> AboutUs
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Subir un módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>
                  Subir un módulo
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Conectarse a Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>
                  Conectarse a Addons Marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/portaldoc/admin732hw8ye9/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.5.2%2526country%253Des/Ayuda?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"48\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/alerts?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"49\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/updates?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"50\">
                      Actualizaciones
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
    
</div>
    
    <div class=\"content-div  with-tabs\">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1352
        $this->displayBlock('content_header', $context, $blocks);
        // line 1353
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1354
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1355
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1356
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=admin%40boxproject.cl&amp;firstname=Admin&amp;lastname=BoxProject&amp;website=http%3A%2F%2Frobertorodriguez.cl%2Fportaldoc%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/portaldoc/admin732hw8ye9/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=admin%40boxproject.cl&amp;firstname=Admin&amp;lastname=BoxProject&amp;website=http%3A%2F%2Frobertorodriguez.cl%2Fportaldoc%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1465
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1352
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1353
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1354
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1355
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1465
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__d2ba3d2bb53602d3dc06e907b69fc5633fea2cba5c18b625e8478290e676cfc9";
    }

    public function getDebugInfo()
    {
        return array (  1628 => 1465,  1611 => 1355,  1594 => 1354,  1577 => 1353,  1560 => 1352,  1527 => 82,  1513 => 1465,  1402 => 1356,  1399 => 1355,  1396 => 1354,  1393 => 1353,  1391 => 1352,  117 => 82,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/portaldoc/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/portaldoc/img/app_icon.png\" />

<title>Gestor de módulos • PortalDoc</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '1.7.5.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '1e9a167aa8dc7fc3584fd8d627e2972f';
    var token_admin_orders = 'b4c3162bc8606624ae261a839880bc68';
    var token_admin_customers = '7ae823c86cd29ba13e3afe1d15d869c9';
    var token_admin_customer_threads = '114e14611b3c8d9bcabad3984b5a8e25';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '79b1e0b876477aaec3e702917cb19b76';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/portaldoc/admin732hw8ye9/index.php/improve/modules/catalog/recommended?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/portaldoc/admin732hw8ye9/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/admin732hw8ye9/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/portaldoc/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/portaldoc\\/admin732hw8ye9\\/\";
var baseDir = \"\\/portaldoc\\/\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"peso chileno\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/admin.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/tools.js?v=1.7.5.2\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/admin732hw8ye9/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/portaldoc/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <style>
.icon-AdminSmartBlog:before{
  content: \"\\f14b\";
   }
 
</style>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-es adminmodulesmanage\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\"></a>
    <span id=\"shop_version\">1.7.5.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4f1439492ed0fab2a8d389d5da0f860b\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item active\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?token=949f15f94b73047d2427702f0c0a400a\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCategories&amp;addcategory&amp;token=981780e2920edb0ecffd190a8d1416f2\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php/sell/catalog/products/new?token=949f15f94b73047d2427702f0c0a400a\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=4bc78efd2421c2476f14fa7108166334\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminModules&amp;&amp;configure=smartblog&amp;token=1554d2449c8728aaf5b217c48324c27a\"
                 data-item=\"Smart Blog Setting\"
      >Smart Blog Setting</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"86\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminQuickAccesses&token=7da6316a6b7147eba8f6190c229882fc\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"M&oacute;dulos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar de acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminQuickAccesses&token=7da6316a6b7147eba8f6190c229882fc\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/portaldoc/admin732hw8ye9/index.php?controller=AdminSearch&amp;token=fac3a9d6849c9f5e3b7e44647f40cc0d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\"
           href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/performance/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Modo depuración</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://robertorodriguez.cl/portaldoc/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver mi tienda
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Y si incluyes algunos descuentos de temporada?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40boxproject.cl.jpg\" />
      <span>Admin BoxProject</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=79b1e0b876477aaec3e702917cb19b76\">
      <i class=\"material-icons\">settings_applications</i>
      Tu perfil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminLogin&amp;logout=1&amp;token=6de6805597021538ce4ef646b4d649b3\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrders&amp;token=b4c3162bc8606624ae261a839880bc68\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/orders/invoices/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminSlip&amp;token=d489984484c1525419fe90242249d38e\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/orders/delivery-slips/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarts&amp;token=75b365204024dc64182c80c7b5ff9269\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/catalog/products?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/catalog/products?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCategories&amp;token=981780e2920edb0ecffd190a8d1416f2\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTracking&amp;token=2587a26d9815eb8e8a934da12e41e24d\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAttributesGroups&amp;token=3d6ba638edb109d379491f205c18bfd3\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminManufacturers&amp;token=5d2e9c892b380a6e1ec71c5cb002676f\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAttachments&amp;token=219b0eaea7e6c7d2921082f9c7e2db90\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCartRules&amp;token=4bc78efd2421c2476f14fa7108166334\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/sell/stocks/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomers&amp;token=7ae823c86cd29ba13e3afe1d15d869c9\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomers&amp;token=7ae823c86cd29ba13e3afe1d15d869c9\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAddresses&amp;token=7fbc9449bd25a92ea6352eb19304f1de\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomerThreads&amp;token=114e14611b3c8d9bcabad3984b5a8e25\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Servicio al Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCustomerThreads&amp;token=114e14611b3c8d9bcabad3984b5a8e25\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminOrderMessage&amp;token=82c33fbd943965332c9c66fc4efa6052\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminReturn&amp;token=dc4b0cdf45b4e19b1a530dab6453d13c\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminStats&amp;token=4f1439492ed0fab2a8d389d5da0f860b\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estadísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/modules/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/modules/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminThemes&amp;token=07a311a82e8e1d0b56293f73369e260c\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Diseño
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminThemes&amp;token=07a311a82e8e1d0b56293f73369e260c\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/modules/addons/themes/catalog?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCmsContent&amp;token=1362f12a9dbe0db2e9118a919d3bc0a0\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/design/modules/positions/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminImages&amp;token=b434296a409674f03ead9a1342d8aaf4\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminLinkWidget&amp;token=e4fa5c5338724bdca2a58214a18bed72\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarriers&amp;token=8fb6a0a36d6a580aadbd47433a3f4827\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Transporte
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminCarriers&amp;token=8fb6a0a36d6a580aadbd47433a3f4827\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/shipping/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/payment_methods?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pago
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/payment_methods?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/payment/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/localization/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/localization/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminZones&amp;token=061ff6d0b851572596e23c5f63033fb2\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTaxes&amp;token=ada5268562493eeb9e059c0de6300a5c\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/international/translations/settings?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"128\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmarketing&amp;token=59f5f279f21c4a3979e083636b1fe33a\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/preferences/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parámetros de la tienda
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/preferences/preferences?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/order-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/product-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/customer-preferences/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminContacts&amp;token=4dd0335948b125cd86471ace879f920e\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/shop/seo-urls/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminSearchConf&amp;token=7a46e2d0a452e8c669f1881b9d526d69\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminGamification&amp;token=b382dce41f7bfd25a3cc662cc8d0c212\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/system-information/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/system-information/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/performance/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/administration/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/emails/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/import/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminEmployees&amp;token=79b1e0b876477aaec3e702917cb19b76\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminRequestSql&amp;token=e78798594048ce19b19165a85a85bfc4\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/portaldoc/admin732hw8ye9/index.php/configure/advanced/logs/?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminWebservice&amp;token=a1de6d5aa12e2415b162628a13b0b15c\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"144\" id=\"tab-AdminFieldMenu\">
              <span class=\"title\">FIELDTHEMES</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"145\" id=\"subtab-AdminFieldMenuSecond\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldThemeCustomizerConfig&amp;token=496e5ba69fd87e124e7de14dfe4167dc\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    FieldThemes Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-145\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminFieldThemeCustomizerConfig\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldThemeCustomizerConfig&amp;token=496e5ba69fd87e124e7de14dfe4167dc\" class=\"link\"> Manage Theme Customizer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminFieldSizechart\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldSizechart&amp;token=cd688559c5f8dd9a18b62c4065ee3ffc\" class=\"link\"> Config Sizechart
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminFieldBlockSearch\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldBlockSearch&amp;token=02c6410d5f1d1722c5d5c1afdd70d5e6\" class=\"link\"> Quick search block
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminFieldMegamenu\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldMegamenu&amp;token=499810475bcc111fb78c2e2453eb3731\" class=\"link\"> Manage Megamenu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"150\" id=\"subtab-AdminFieldSlideshow\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldSlideshow&amp;token=a27e87c514422d677b21e8bc901cd876\" class=\"link\"> Manage Slideshow
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"151\" id=\"subtab-AdminPopupNewsletter\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminPopupNewsletter&amp;token=9fef5ad6226d7f1b60a8f5b4dc88fdef\" class=\"link\"> Popup newsletter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"152\" id=\"subtab-AdminFieldBrandSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldBrandSlider&amp;token=6a63e90e4a941f99e54199cb68a98b3e\" class=\"link\"> Configuge brands
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"153\" id=\"subtab-AdminFieldstaticblocks\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldstaticblocks&amp;token=5f552ef518eb530092d12a22fc46a957\" class=\"link\"> Manage Staticblocks
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"154\" id=\"subtab-AdminFieldstaticfooter\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldstaticfooter&amp;token=0bed529656ce0f96bcc55b978fad00ab\" class=\"link\"> Manage Static Footer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"155\" id=\"subtab-AdminFieldTopSellers\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldTopSellers&amp;token=c35251e0f9cfb60c6555b6f7ffebae94\" class=\"link\"> Configure top sellers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"156\" id=\"subtab-AdminFieldFeaturedProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldFeaturedProductSlider&amp;token=798d31d1f82638b311fd8a0db7752132\" class=\"link\"> Configure featured products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminFieldOneCateProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldOneCateProductSlider&amp;token=24a3708bd627d89a8fc10d9516511ef1\" class=\"link\"> Configure one categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminFieldNewProductSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldNewProductSlider&amp;token=94166bbbcf40cddd2f5f0ff2d3da64d0\" class=\"link\"> Configure new products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"159\" id=\"subtab-AdminFieldProductCates\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldProductCates&amp;token=671069b9ba20b22979c3171dd2d76197\" class=\"link\"> Configure product cates
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminFieldTabCateSlider\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldTabCateSlider&amp;token=fe82aad38602f7336df42f1e71f1d16a\" class=\"link\"> Configure tabcateslider
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminFieldElevatezoom\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldElevatezoom&amp;token=365a5da28b007efb16b621d211837ab0\" class=\"link\"> Config Elevatezoom
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminTestimonial\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminTestimonial&amp;token=e7fb3cdf37efe0db0310e00ac592145c\" class=\"link\"> Manage Testimonial
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"163\" id=\"subtab-AdminFieldVMegaMenu\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminFieldVMegaMenu&amp;token=0a7067a4df73408d7c00e4c683dc6959\" class=\"link\"> Manage Vertical Megamenu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-AdminModules&configure=productcomments\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminModules&amp;configure=productcomments&amp;token=6614872c7f7956e4fc3efa91ad9a57f0\" class=\"link\"> Config ProductComments
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminSmartBlog\">
                  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogCategory&amp;token=370a65b852ae783658cbff0a2535433f\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    SmartBlog Configure
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-165\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"166\" id=\"subtab-AdminBlogCategory\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogCategory&amp;token=370a65b852ae783658cbff0a2535433f\" class=\"link\"> Blog Category
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"167\" id=\"subtab-AdminBlogcomment\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogcomment&amp;token=3a2243f249eb41fada8e7eb431543a2a\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-AdminBlogPost\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminBlogPost&amp;token=3d12444cd8c021bdd06aa7bf425e4255\" class=\"link\"> Blog Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminImageType\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminImageType&amp;token=63bc48267998587e7787893e8b7f5713\" class=\"link\"> Image Type
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"170\" id=\"subtab-AdminAboutUs\">
                              <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminAboutUs&amp;token=10de367db18445bbd5fcc04753c90791\" class=\"link\"> AboutUs
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" aria-current=\"page\">Módulos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestor de módulos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Subir un módulo\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>
                  Subir un módulo
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Conectarse a Addons Marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>
                  Conectarse a Addons Marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/portaldoc/admin732hw8ye9/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.5.2%2526country%253Des/Ayuda?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/manage?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"48\">
                      Módulos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/alerts?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"49\">
                      Alertas
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/portaldoc/admin732hw8ye9/index.php/improve/modules/updates?_token=e7Of3eU_7WdXLYCjMJEB3izRrUf_WdpsmzPzZXLB9sk\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"50\">
                      Actualizaciones
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
    
</div>
    
    <div class=\"content-div  with-tabs\">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://robertorodriguez.cl/portaldoc/admin732hw8ye9/index.php?controller=AdminDashboard&amp;token=3ebdd142cff8d7ced1b008443b4ab20b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=admin%40boxproject.cl&amp;firstname=Admin&amp;lastname=BoxProject&amp;website=http%3A%2F%2Frobertorodriguez.cl%2Fportaldoc%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/portaldoc/admin732hw8ye9/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=admin%40boxproject.cl&amp;firstname=Admin&amp;lastname=BoxProject&amp;website=http%3A%2F%2Frobertorodriguez.cl%2Fportaldoc%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__d2ba3d2bb53602d3dc06e907b69fc5633fea2cba5c18b625e8478290e676cfc9", "");
    }
}
