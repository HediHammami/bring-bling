<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__059a0b83d82a0a68e753e2ff09905133 */
class __TwigTemplate_1affed15fa8fda69287687d6a1f902c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Pages • my store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'TN';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '7460006a919c6a15f9c1699c8a9664d4';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = 'aac7151eb33be8f10d55b3090149a43a';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/modules/manage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0';
    var admin_notification_get_link = '/prestashop/admin867mm2qznv9a1qeythr/index.php/common/notifications?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin867mm2qznv9a1qeythr/index.php/common/notifications/ack?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0';
    var tab_modules_list = '';
    var u";
        // line 42
        echo "pdate_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin867mm2qznv9a1qeythr/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin867mm2qznv9a1qeythr/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin867mm2qznv9a1qeythr/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin867mm2qznv9a1qeythr/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin867mm2qznv9a1qeythr\\/\";
var baseDir = \"\\/prestashop\\/\";
";
        // line 71
        echo "var changeFormLanguageUrl = \"\\/prestashop\\/admin867mm2qznv9a1qeythr\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin867mm2qznv9a1qeythr/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin867mm2qznv9a1qeythr/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/";
        // line 88
        echo "admin867mm2qznv9a1qeythr/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin867mm2qznv9a1qeythr/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin867mm2qznv9a1qeythr\\/index.php?controller=AdminGamification&token=207cc33c5b8c5dd8736f5d47beafe649\";
            var current_id_tab = 47;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin867mm2qznv9a1qeythr/index.php/common/notifications?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
     ";
        // line 118
        echo "   window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 123
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en admincmscontent\"
  data-base-url=\"/prestashop/admin867mm2qznv9a1qeythr/index.php\"  data-token=\"OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/pseditionbasic/homepage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c0892c6ab98839cf3b16c39549cfda33\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/modules/manage?token=30289f29258e27547138ea2f12b2d389\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/categories/new?token=30289f29258e27547138ea2f12b2d389\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/products-v2/create?token=30289f29258e27547138e";
        // line 157
        echo "a2f12b2d389\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7b273ebb5f8a4d070fbf7693e11aeefc\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders?token=30289f29258e27547138ea2f12b2d389\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"105\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/4/edit\"
        data-post-link=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminQuickAccesses&token=e70255e29fbe94c9832f873d107e03df\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Pages - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminQuickAccesses&token=e70255e29fbe94c9832f873d107e03df\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminSearch&amp;token=de41da1fd1a79288066fed6780d7784f\"
      role=\"search\">
  <input ";
        // line 198
        echo "type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i>";
        // line 213
        echo " Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c0892c6ab98839cf3b16c39549cfda33\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/modules/manage?token=30289f29258e27547138ea2f12b2d389\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/categories/new?token=30289f29258e27547138ea2f12b2d389\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/products-v2/create?token=30289f29258e27547138ea2f12b2d389\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7b273ebb5f8a4d070fbf7";
        // line 250
        echo "693e11aeefc\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders?token=30289f29258e27547138ea2f12b2d389\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"92\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/cms-pages/4/edit\"
      data-post-link=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminQuickAccesses&token=e70255e29fbe94c9832f873d107e03df\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Pages - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminQuickAccesses&token=e70255e29fbe94c9832f873d107e03df\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"no";
        // line 297
        echo "tifications-total\" class=\"count hide\">0</span>
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7208f228b71655363baa4721253c38ef\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
            ";
        // line 349
        echo "                        <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"emp";
        // line 400
        echo "loyee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"Med\" /></span>
        <span class=\"employee_profile\">Welcome back Med</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/employees/1/edit?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i";
        // line 422
        echo " class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminLogin&amp;logout=1&amp;token=8141623a6938a6beb29b90199138212c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/employees/toggle-navigation?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/pseditionbasic/homepage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"154\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
        ";
        // line 465
        echo "          <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/pseditionbasic/homepage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminDashboard&amp;token=916a749e35296988f816f7c73dc24a1c\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
 ";
        // line 502
        echo "                 
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders/invoices/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                     ";
        // line 532
        echo "                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders/credit-slips/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/orders/delivery-slips/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCarts&amp;token=7208f228b71655363baa4721253c38ef\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin867mm";
        // line 563
        echo "2qznv9a1qeythr/index.php/sell/catalog/products?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/products?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/categories?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
             ";
        // line 593
        echo "                   <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/monitoring/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminAttributesGroups&amp;token=d9fa7bd9b8bd43d5e610c496355ab5cc\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/catalog/brands/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/attachments/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Files
                                </a>
                              </li>

                                                                          ";
        // line 621
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCartRules&amp;token=7b273ebb5f8a4d070fbf7693e11aeefc\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/stocks/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/customers/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                               ";
        // line 652
        echo "             </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/customers/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/addresses/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCustomerThreads&amp;token=76e2b8350fdff281b1ad2947e04f1855\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"mate";
        // line 682
        echo "rial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCustomerThreads&amp;token=76e2b8350fdff281b1ad2947e04f1855\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/sell/customer-service/order-messages/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminReturn&amp;token=b7c18a8fd2e2b5a717ac0326a02ca36b\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                 ";
        // line 711
        echo "                                                             </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/metrics/legacy/stats?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/metrics/legacy/stats?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/metri";
        // line 740
        echo "cs?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/mbo/modules/catalog/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index";
        // line 775
        echo ".php/modules/mbo/modules/catalog/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/modules/manage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/improve/design/themes?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                             ";
        // line 804
        echo "         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"133\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/improve/design/themes?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=f4272ad94475f71d4426d2096dbe39ec\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/mbo/themes/catalog/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/design/mail_";
        // line 832
        echo "theme/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/design/cms-pages/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/design/modules/positions/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminImages&amp;token=3cbaa50ef62c0dc3c3daccc983372a51\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
            ";
        // line 863
        echo "                  <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/link-widget/list?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCarriers&amp;token=777d3901f04b972e742543e7cf99c236\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminCarriers&amp;token=777d3901f04b972e742543e7cf99c236\" class=\"link\"> Carriers
                                </a>
                              </li>

     ";
        // line 893
        echo "                                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/shipping/preferences/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminMbeConfiguration&amp;token=349e4de356136f1f6e585a997f6967b7\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminMbeShipping&amp;token=618e1015b28198bcde219cee4fd253a9\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
 ";
        // line 923
        echo "                 <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/payment/payment_methods?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/payment/payment_methods?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/payment/preferences?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
     ";
        // line 951
        echo "                                   </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/international/localization/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/international/localization/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/international/zones/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45";
        // line 979
        echo "RmDNJ_R1tJYH0\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/international/taxes/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/international/translations/settings?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"141\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminPsfacebookModule&amp;token=745cc0fac95fdfc96dc7596dca3a212c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"mat";
        // line 1011
        echo "erial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-141\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminPsfacebookModule&amp;token=745cc0fac95fdfc96dc7596dca3a212c\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=72c2002e5e099adfe9913e1fe2a990d3\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
";
        // line 1048
        echo "                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/pseditionbasic/settings?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/preferences/preferences?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72";
        // line 1077
        echo "\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/preferences/preferences?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/order-preferences/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/product-preferences/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/customer-preferences/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Customer Settings
                                </a>
                    ";
        // line 1104
        echo "          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/contacts/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/shop/seo-urls/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminSearchConf&amp;token=509d83da26705bd981c886a386d6883a\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=";
        // line 1136
        echo "\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/system-information/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/system-information/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/performance/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                  ";
        // line 1164
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/administration/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/emails/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/import/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/employees/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> ";
        // line 1191
        echo "Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/sql-requests/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/logs/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/webservice-keys/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
     ";
        // line 1221
        echo "                                                       
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/feature-flags/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/configure/advanced/security/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"170\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin867mm2qznv9a1qeythr/index.php?controller=AdminKlaviyoPsConfig&amp;token=46e52a2effe4e081d1db59a68316a4fc\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                ";
        // line 1250
        echo "            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/improve/design/cms-pages/?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" aria-current=\"page\">Pages</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Pages          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.4%2526country%253Den/Help?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" h";
        // line 1314
        echo "ref=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.4%2526country%253Den/Help?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Customize pages',
        'Close': 'Close',
      },
      recommendedModulesUrl: '/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/mbo/modules/recommended/?tabClassName=AdminCmsContent&recommendation_format=modal&_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1353
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop/admin867mm2qznv9a1qeythr/index.php/modules/pseditionbasic/homepage?_token=OzSYrpR91IyWwfyJRe_djnTGgfxA45RmDNJ_R1tJYH0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1387
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 123
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1353
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1387
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__059a0b83d82a0a68e753e2ff09905133";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1566 => 1387,  1545 => 1353,  1534 => 123,  1525 => 1387,  1485 => 1353,  1444 => 1314,  1378 => 1250,  1347 => 1221,  1315 => 1191,  1286 => 1164,  1256 => 1136,  1222 => 1104,  1193 => 1077,  1162 => 1048,  1123 => 1011,  1089 => 979,  1059 => 951,  1029 => 923,  997 => 893,  965 => 863,  932 => 832,  902 => 804,  871 => 775,  834 => 740,  803 => 711,  772 => 682,  740 => 652,  707 => 621,  677 => 593,  645 => 563,  612 => 532,  580 => 502,  541 => 465,  496 => 422,  472 => 400,  419 => 349,  365 => 297,  316 => 250,  277 => 213,  260 => 198,  217 => 157,  178 => 123,  171 => 118,  139 => 88,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__059a0b83d82a0a68e753e2ff09905133", "");
    }
}
