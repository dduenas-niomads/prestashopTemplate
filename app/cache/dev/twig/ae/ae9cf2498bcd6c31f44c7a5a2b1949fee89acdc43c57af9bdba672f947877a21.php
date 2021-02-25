<?php

/* __string_template__dffe9c1fd330e92ab1e547d6003f9c235fbb8b11827821c47b0a750d2097bb55 */
class __TwigTemplate_c1767edc844eeab2703035100eaf147ec86234305cee000bdaf3e9068ce7de71 extends Twig_Template
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
        $__internal_d398686a2e1627291e91ecdbccf040db5f1d4bc390320ab021c37c95eafdeca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d398686a2e1627291e91ecdbccf040db5f1d4bc390320ab021c37c95eafdeca4->enter($__internal_d398686a2e1627291e91ecdbccf040db5f1d4bc390320ab021c37c95eafdeca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__dffe9c1fd330e92ab1e547d6003f9c235fbb8b11827821c47b0a750d2097bb55"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Productos • retailperu</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'PE';
    var _PS_VERSION_ = '1.7.3.1';
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
    var token = '90423d91d6e5dd8b693d65753ae1d893';
    var token_admin_orders = 'f6b94f3a1219418ec1b14c215260dc0d';
    var token_admin_customers = '571b77aef7d1e65e043d71263d489033';
    var token_admin_customer_threads = 'e470d5ca0e259fe869bd923b91433915';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'a1fb91b35fff2a6584d5e81e3172c740';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin860x19hwa/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/admin860x19hwa/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin860x19hwa/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin860x19hwa\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"PEN\",\"sign\":\"PEN\",\"name\":\"nuevo sol peruano\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.3.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.3.1\"></script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>


  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/prestashop.facturaprepago.com\\/admin860x19hwa\\/index.php?controller=AdminGamification&token=35fdaf5a6eb5b411f3c06b5d051aecd5\";
            var current_id_tab = 10;
        </script>

";
        // line 80
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-es adminproducts\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c70aacca226eacee2f57445e239da666\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php/module/manage?token=09a255aa6e7160f31a6d7328103b2c68\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCategories&amp;addcategory&amp;token=c928b8ca1568c3633659bc8c891b58b7\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php/product/new?token=09a255aa6e7160f31a6d7328103b2c68\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b5ba281c73180b611767e87f49bb910b\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"33\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog?-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"
        data-post-link=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminQuickAccesses&token=8b35475fa083fca3e2a75050f75d2887\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminQuickAccesses&token=8b35475fa083fca3e2a75050f75d2887\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin860x19hwa/index.php?controller=AdminSearch&amp;token=bcf8c97a9a16645fc5a7df0c9301b112\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-btn\">
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
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Facturas</a>
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

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\">Modo depuración</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://prestashop.facturaprepago.com/\" target= \"_blank\">retailperu</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Que no haya noticias, es de por sí una buena noticia, ¿verdad?
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
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">account_circle</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/info%40niomads.com.jpg\" /><br>
      <span>Niomads Dev</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmployees&amp;token=a1fb91b35fff2a6584d5e81e3172c740&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Tu perfil
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLogin&amp;token=3cd66575188cfc76060d8d2a87bca90c&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Cerrar sesión
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Pedidos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminInvoices&amp;token=ffa6929e3dcdb9f225f8c7ca695c4dcf\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminSlip&amp;token=c2bbc702e9515588e508eb178066f150\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDeliverySlip&amp;token=0a021a50ca406531aca4dbeb3fc46163\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarts&amp;token=63da7eae02a3b41880cb0f0a956ee55e\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCategories&amp;token=c928b8ca1568c3633659bc8c891b58b7\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTracking&amp;token=a865b4f3429e956f9850f4de00349365\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAttributesGroups&amp;token=a3081936fa5efbd12cd142f81f031639\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminManufacturers&amp;token=331afedc9d6a15e8df3161c137460210\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAttachments&amp;token=c36a53c25f102b1635e1b979ee14ac4c\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCartRules&amp;token=b5ba281c73180b611767e87f49bb910b\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin860x19hwa/index.php/stock/?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomers&amp;token=571b77aef7d1e65e043d71263d489033\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomers&amp;token=571b77aef7d1e65e043d71263d489033\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAddresses&amp;token=dc3b3d8f9364ac7a65b8554745ed1654\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerThreads&amp;token=e470d5ca0e259fe869bd923b91433915\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servicio al Cliente
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerThreads&amp;token=e470d5ca0e259fe869bd923b91433915\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrderMessage&amp;token=a2a10ebf69c10caaf4892bb2e716e5c7\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminReturn&amp;token=dc54a413ef38b939e60124156c39f6e5\" class=\"link\"> Devoluciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminStats&amp;token=c70aacca226eacee2f57445e239da666\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estadísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin860x19hwa/index.php/module/addons-store?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemes&amp;token=b2b186f270446e2ae5a42033669054b8\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Diseño
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemes&amp;token=b2b186f270446e2ae5a42033669054b8\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemesCatalog&amp;token=595d1faf9b84d114a45fa987f7182514\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCmsContent&amp;token=a0f21925fe49f21c1457c675a44c7e91\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminModulesPositions&amp;token=cbaf106a2dd7d8d8b135f8ced1bdd31b\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminImages&amp;token=6c2349fdcad07c51b1535dce8623bdc5\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLinkWidget&amp;token=dceeeb32a3f568fd1682ecb421c36453\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarriers&amp;token=188829273140dcb5d5694855b2db8276\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transporte
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarriers&amp;token=188829273140dcb5d5694855b2db8276\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminShipping&amp;token=7ab157792b04ed83300748dd6722f842\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPayment&amp;token=5b6ed3a53a812a027a71a31c6188eb0f\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pago
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPayment&amp;token=5b6ed3a53a812a027a71a31c6188eb0f\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPaymentPreferences&amp;token=026dcde83d5ea3ebebf951ba3752d488\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLocalization&amp;token=cc7909bcbce6a8af7a5aaf3af0fdb65c\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internacional
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLocalization&amp;token=cc7909bcbce6a8af7a5aaf3af0fdb65c\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminZones&amp;token=008309130d8994122530cfc676f4d06b\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTaxes&amp;token=6cbcb0cd024f7a3a99314e438e4cbf33\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTranslations&amp;token=401eafd8c1e6227c9ee3a794cf2c0bbd\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPreferences&amp;token=501a9d0421fda1955ebe6e069c92f9ed\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parámetros de la tienda
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPreferences&amp;token=501a9d0421fda1955ebe6e069c92f9ed\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrderPreferences&amp;token=36871fec3fec16db85b9bc39cef42bec\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPPreferences&amp;token=8d8c7bcd597a0ab022e4e2578c6c1d05\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerPreferences&amp;token=a46df9c31f1dae2331e363d05c064f9c\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminContacts&amp;token=89c768b1566d3b16eb1e0bf36991aa79\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminMeta&amp;token=21ba43d56c8f9910e13300f5bdb2bc3b\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminSearchConf&amp;token=d8a96cbe1a8d664b8b332ac3b5a1dc31\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminGamification&amp;token=35fdaf5a6eb5b411f3c06b5d051aecd5\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin860x19hwa/index.php/configure/advanced/system_information?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin860x19hwa/index.php/configure/advanced/system_information?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin860x19hwa/index.php/configure/advanced/performance?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAdminPreferences&amp;token=def471823876960fc63972d9c5094855\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmails&amp;token=ba1e4d1b9d9c8567838eb64b6bbeb2fd\" class=\"link\"> Dirección de email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminImport&amp;token=32f387117ed64d2cb94e7f9b3414dcf2\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmployees&amp;token=a1fb91b35fff2a6584d5e81e3172c740\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminRequestSql&amp;token=1292fade3b94bab36ed4188c399a2a93\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLogs&amp;token=7eb61cb0aafef21ee8008a19fcbcc1f2\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminWebservice&amp;token=bd6312ef3eeb7eb4fa8604dd7dd41229\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCatalog&amp;token=ab0e15acf8ec39a48550c9aea05a147e\">Catálogo</a>
              
                        <a class=\"breadcrumb-item active\" href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\">Productos</a>
              
    </nav>
  

  
    <h2 class=\"title\">
      Productos    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                                      
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin860x19hwa/index.php/product/new?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"            title=\"Crear un nuevo producto: CTRL + P\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Nuevo</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"          title=\"Módulos y Servicios recomendados\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Módulos y Servicios recomendados</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ayuda\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin860x19hwa/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D1.7.3.1%2526country%253Des/Ayuda?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ayuda</span>
          </a>
                  </div>
  
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin860x19hwa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
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

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1106
        $this->displayBlock('content_header', $context, $blocks);
        // line 1107
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1108
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1109
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1110
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
  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\" class=\"btn btn-primary py-1 mt-3\">
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin860x19hwa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
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
        // line 1218
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_d398686a2e1627291e91ecdbccf040db5f1d4bc390320ab021c37c95eafdeca4->leave($__internal_d398686a2e1627291e91ecdbccf040db5f1d4bc390320ab021c37c95eafdeca4_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cb4ebbe2c2e38720f6e676b497b1c285e5785940d40b932720ae4a29c302a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb4ebbe2c2e38720f6e676b497b1c285e5785940d40b932720ae4a29c302a2e->enter($__internal_0cb4ebbe2c2e38720f6e676b497b1c285e5785940d40b932720ae4a29c302a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0cb4ebbe2c2e38720f6e676b497b1c285e5785940d40b932720ae4a29c302a2e->leave($__internal_0cb4ebbe2c2e38720f6e676b497b1c285e5785940d40b932720ae4a29c302a2e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_bb1c09b24ac3942eaaa46e6014fec2f04fe620697f20e340743966d1fabcbe06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1c09b24ac3942eaaa46e6014fec2f04fe620697f20e340743966d1fabcbe06->enter($__internal_bb1c09b24ac3942eaaa46e6014fec2f04fe620697f20e340743966d1fabcbe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_bb1c09b24ac3942eaaa46e6014fec2f04fe620697f20e340743966d1fabcbe06->leave($__internal_bb1c09b24ac3942eaaa46e6014fec2f04fe620697f20e340743966d1fabcbe06_prof);

    }

    // line 1106
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e7b1a8025753ef1cc08a232dd3b8d6a7ffe202d0aa263a3e74cdffbfa272ec6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b1a8025753ef1cc08a232dd3b8d6a7ffe202d0aa263a3e74cdffbfa272ec6f->enter($__internal_e7b1a8025753ef1cc08a232dd3b8d6a7ffe202d0aa263a3e74cdffbfa272ec6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_e7b1a8025753ef1cc08a232dd3b8d6a7ffe202d0aa263a3e74cdffbfa272ec6f->leave($__internal_e7b1a8025753ef1cc08a232dd3b8d6a7ffe202d0aa263a3e74cdffbfa272ec6f_prof);

    }

    // line 1107
    public function block_content($context, array $blocks = array())
    {
        $__internal_237bececeac6bd3c48ae8b45f8eedd08951be8d24fe50c7c59012dce782a4dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237bececeac6bd3c48ae8b45f8eedd08951be8d24fe50c7c59012dce782a4dde->enter($__internal_237bececeac6bd3c48ae8b45f8eedd08951be8d24fe50c7c59012dce782a4dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_237bececeac6bd3c48ae8b45f8eedd08951be8d24fe50c7c59012dce782a4dde->leave($__internal_237bececeac6bd3c48ae8b45f8eedd08951be8d24fe50c7c59012dce782a4dde_prof);

    }

    // line 1108
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_1d0777a8a54c583a3e15d9d4be9d205e0b122d9d30327f738c315c012685d238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0777a8a54c583a3e15d9d4be9d205e0b122d9d30327f738c315c012685d238->enter($__internal_1d0777a8a54c583a3e15d9d4be9d205e0b122d9d30327f738c315c012685d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_1d0777a8a54c583a3e15d9d4be9d205e0b122d9d30327f738c315c012685d238->leave($__internal_1d0777a8a54c583a3e15d9d4be9d205e0b122d9d30327f738c315c012685d238_prof);

    }

    // line 1109
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_1505c701fe850e5325334f4a2a484a14a6b83cff5e8f3377163d916b52b9b879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1505c701fe850e5325334f4a2a484a14a6b83cff5e8f3377163d916b52b9b879->enter($__internal_1505c701fe850e5325334f4a2a484a14a6b83cff5e8f3377163d916b52b9b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_1505c701fe850e5325334f4a2a484a14a6b83cff5e8f3377163d916b52b9b879->leave($__internal_1505c701fe850e5325334f4a2a484a14a6b83cff5e8f3377163d916b52b9b879_prof);

    }

    // line 1218
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f671eb330107bcc110f5101a2424fbfcc4d8d5ed4f5d9d6d18f52291f83efb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f671eb330107bcc110f5101a2424fbfcc4d8d5ed4f5d9d6d18f52291f83efb6->enter($__internal_5f671eb330107bcc110f5101a2424fbfcc4d8d5ed4f5d9d6d18f52291f83efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f671eb330107bcc110f5101a2424fbfcc4d8d5ed4f5d9d6d18f52291f83efb6->leave($__internal_5f671eb330107bcc110f5101a2424fbfcc4d8d5ed4f5d9d6d18f52291f83efb6_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_16b1405566a93de5507479376dc0d06ea656395f2cad5906b7ddd567abacf38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b1405566a93de5507479376dc0d06ea656395f2cad5906b7ddd567abacf38e->enter($__internal_16b1405566a93de5507479376dc0d06ea656395f2cad5906b7ddd567abacf38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_16b1405566a93de5507479376dc0d06ea656395f2cad5906b7ddd567abacf38e->leave($__internal_16b1405566a93de5507479376dc0d06ea656395f2cad5906b7ddd567abacf38e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_eab611d8c68a526dba67bef2c175f194b9a9278bb43cee77c27d3c995a7e8415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab611d8c68a526dba67bef2c175f194b9a9278bb43cee77c27d3c995a7e8415->enter($__internal_eab611d8c68a526dba67bef2c175f194b9a9278bb43cee77c27d3c995a7e8415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_eab611d8c68a526dba67bef2c175f194b9a9278bb43cee77c27d3c995a7e8415->leave($__internal_eab611d8c68a526dba67bef2c175f194b9a9278bb43cee77c27d3c995a7e8415_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__dffe9c1fd330e92ab1e547d6003f9c235fbb8b11827821c47b0a750d2097bb55";
    }

    public function getDebugInfo()
    {
        return array (  1339 => 1218,  1328 => 1109,  1317 => 1108,  1306 => 1107,  1295 => 1106,  1274 => 80,  1263 => 1218,  1153 => 1110,  1150 => 1109,  1147 => 1108,  1144 => 1107,  1142 => 1106,  112 => 80,  31 => 1,);
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Productos • retailperu</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'PE';
    var _PS_VERSION_ = '1.7.3.1';
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
    var token = '90423d91d6e5dd8b693d65753ae1d893';
    var token_admin_orders = 'f6b94f3a1219418ec1b14c215260dc0d';
    var token_admin_customers = '571b77aef7d1e65e043d71263d489033';
    var token_admin_customer_threads = 'e470d5ca0e259fe869bd923b91433915';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'a1fb91b35fff2a6584d5e81e3172c740';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin860x19hwa/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/admin860x19hwa/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin860x19hwa/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin860x19hwa\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"PEN\",\"sign\":\"PEN\",\"name\":\"nuevo sol peruano\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.3.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.3.1\"></script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin860x19hwa/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>


  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/prestashop.facturaprepago.com\\/admin860x19hwa\\/index.php?controller=AdminGamification&token=35fdaf5a6eb5b411f3c06b5d051aecd5\";
            var current_id_tab = 10;
        </script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-es adminproducts\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c70aacca226eacee2f57445e239da666\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php/module/manage?token=09a255aa6e7160f31a6d7328103b2c68\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCategories&amp;addcategory&amp;token=c928b8ca1568c3633659bc8c891b58b7\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php/product/new?token=09a255aa6e7160f31a6d7328103b2c68\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b5ba281c73180b611767e87f49bb910b\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"33\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog?-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"
        data-post-link=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminQuickAccesses&token=8b35475fa083fca3e2a75050f75d2887\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminQuickAccesses&token=8b35475fa083fca3e2a75050f75d2887\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin860x19hwa/index.php?controller=AdminSearch&amp;token=bcf8c97a9a16645fc5a7df0c9301b112\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-btn\">
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
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Facturas</a>
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

          <div class=\"component d-none d-md-inline-block\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"pstooltip\" data-placement=\"bottom\" data-html=\"true\"
                title=\"<p class='text-left text-nowrap'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\">Modo depuración</span>
        </div>
      </div>
            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://prestashop.facturaprepago.com/\" target= \"_blank\">retailperu</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Que no haya noticias, es de por sí una buena noticia, ¿verdad?
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
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">account_circle</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/info%40niomads.com.jpg\" /><br>
      <span>Niomads Dev</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmployees&amp;token=a1fb91b35fff2a6584d5e81e3172c740&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Tu perfil
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLogin&amp;token=3cd66575188cfc76060d8d2a87bca90c&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Cerrar sesión
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Pedidos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrders&amp;token=f6b94f3a1219418ec1b14c215260dc0d\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminInvoices&amp;token=ffa6929e3dcdb9f225f8c7ca695c4dcf\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminSlip&amp;token=c2bbc702e9515588e508eb178066f150\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDeliverySlip&amp;token=0a021a50ca406531aca4dbeb3fc46163\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarts&amp;token=63da7eae02a3b41880cb0f0a956ee55e\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCategories&amp;token=c928b8ca1568c3633659bc8c891b58b7\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTracking&amp;token=a865b4f3429e956f9850f4de00349365\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAttributesGroups&amp;token=a3081936fa5efbd12cd142f81f031639\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminManufacturers&amp;token=331afedc9d6a15e8df3161c137460210\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAttachments&amp;token=c36a53c25f102b1635e1b979ee14ac4c\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCartRules&amp;token=b5ba281c73180b611767e87f49bb910b\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin860x19hwa/index.php/stock/?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomers&amp;token=571b77aef7d1e65e043d71263d489033\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomers&amp;token=571b77aef7d1e65e043d71263d489033\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAddresses&amp;token=dc3b3d8f9364ac7a65b8554745ed1654\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerThreads&amp;token=e470d5ca0e259fe869bd923b91433915\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servicio al Cliente
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerThreads&amp;token=e470d5ca0e259fe869bd923b91433915\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrderMessage&amp;token=a2a10ebf69c10caaf4892bb2e716e5c7\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminReturn&amp;token=dc54a413ef38b939e60124156c39f6e5\" class=\"link\"> Devoluciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminStats&amp;token=c70aacca226eacee2f57445e239da666\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estadísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin860x19hwa/index.php/module/addons-store?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemes&amp;token=b2b186f270446e2ae5a42033669054b8\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Diseño
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemes&amp;token=b2b186f270446e2ae5a42033669054b8\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminThemesCatalog&amp;token=595d1faf9b84d114a45fa987f7182514\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCmsContent&amp;token=a0f21925fe49f21c1457c675a44c7e91\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminModulesPositions&amp;token=cbaf106a2dd7d8d8b135f8ced1bdd31b\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminImages&amp;token=6c2349fdcad07c51b1535dce8623bdc5\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLinkWidget&amp;token=dceeeb32a3f568fd1682ecb421c36453\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarriers&amp;token=188829273140dcb5d5694855b2db8276\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transporte
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCarriers&amp;token=188829273140dcb5d5694855b2db8276\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminShipping&amp;token=7ab157792b04ed83300748dd6722f842\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPayment&amp;token=5b6ed3a53a812a027a71a31c6188eb0f\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pago
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPayment&amp;token=5b6ed3a53a812a027a71a31c6188eb0f\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPaymentPreferences&amp;token=026dcde83d5ea3ebebf951ba3752d488\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLocalization&amp;token=cc7909bcbce6a8af7a5aaf3af0fdb65c\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internacional
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLocalization&amp;token=cc7909bcbce6a8af7a5aaf3af0fdb65c\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminZones&amp;token=008309130d8994122530cfc676f4d06b\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTaxes&amp;token=6cbcb0cd024f7a3a99314e438e4cbf33\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminTranslations&amp;token=401eafd8c1e6227c9ee3a794cf2c0bbd\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPreferences&amp;token=501a9d0421fda1955ebe6e069c92f9ed\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parámetros de la tienda
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPreferences&amp;token=501a9d0421fda1955ebe6e069c92f9ed\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminOrderPreferences&amp;token=36871fec3fec16db85b9bc39cef42bec\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminPPreferences&amp;token=8d8c7bcd597a0ab022e4e2578c6c1d05\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCustomerPreferences&amp;token=a46df9c31f1dae2331e363d05c064f9c\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminContacts&amp;token=89c768b1566d3b16eb1e0bf36991aa79\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminMeta&amp;token=21ba43d56c8f9910e13300f5bdb2bc3b\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminSearchConf&amp;token=d8a96cbe1a8d664b8b332ac3b5a1dc31\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminGamification&amp;token=35fdaf5a6eb5b411f3c06b5d051aecd5\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin860x19hwa/index.php/configure/advanced/system_information?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin860x19hwa/index.php/configure/advanced/system_information?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin860x19hwa/index.php/configure/advanced/performance?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminAdminPreferences&amp;token=def471823876960fc63972d9c5094855\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmails&amp;token=ba1e4d1b9d9c8567838eb64b6bbeb2fd\" class=\"link\"> Dirección de email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminImport&amp;token=32f387117ed64d2cb94e7f9b3414dcf2\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminEmployees&amp;token=a1fb91b35fff2a6584d5e81e3172c740\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminRequestSql&amp;token=1292fade3b94bab36ed4188c399a2a93\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminLogs&amp;token=7eb61cb0aafef21ee8008a19fcbcc1f2\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminWebservice&amp;token=bd6312ef3eeb7eb4fa8604dd7dd41229\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminCatalog&amp;token=ab0e15acf8ec39a48550c9aea05a147e\">Catálogo</a>
              
                        <a class=\"breadcrumb-item active\" href=\"/admin860x19hwa/index.php/product/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\">Productos</a>
              
    </nav>
  

  
    <h2 class=\"title\">
      Productos    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                                      
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/admin860x19hwa/index.php/product/new?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"            title=\"Crear un nuevo producto: CTRL + P\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Nuevo</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin860x19hwa/index.php/module/catalog?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"          title=\"Módulos y Servicios recomendados\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Módulos y Servicios recomendados</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ayuda\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin860x19hwa/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminProducts%253Fversion%253D1.7.3.1%2526country%253Des/Ayuda?_token=wlHD36-URUj5feRyVKFqMBAe81mEBekeVehXi-p_Fyg\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ayuda</span>
          </a>
                  </div>
  
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin860x19hwa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
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

    <div class=\"content-div \">

      

      

      

      
      
      
      

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
  <a href=\"http://prestashop.facturaprepago.com/admin860x19hwa/index.php?controller=AdminDashboard&amp;token=eff659267fcc55ec61b4f49c9d68aeb3\" class=\"btn btn-primary py-1 mt-3\">
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin860x19hwa/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=info%40niomads.com&amp;firstname=Niomads&amp;lastname=Dev&amp;website=http%3A%2F%2Fprestashop.facturaprepago.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
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
</html>", "__string_template__dffe9c1fd330e92ab1e547d6003f9c235fbb8b11827821c47b0a750d2097bb55", "");
    }
}
