<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 03:00:30
         compiled from "C:\xampp\htdocs\tienda\modules\paypalmx\views\templates\hook\express-checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:477957aadf1e4c7ed3-03991894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31f26dfc281cb1828c6b22bfbc98e8f9396d3d5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\modules\\paypalmx\\views\\templates\\hook\\express-checkout.tpl',
      1 => 1470815591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477957aadf1e4c7ed3-03991894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'paypal_mx_express_checkout_no_token' => 0,
    'paypal_mx_express_checkout_hook_payment' => 0,
    'paypal_mx_action_payment' => 0,
    'paypal_mx_merchant_country_is_mx' => 0,
    'module_dir' => 0,
    'lang_iso' => 0,
    'PS_CATALOG_MODE' => 0,
    'paypal_mx_action' => 0,
    'paypal_mx_from_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57aadf1e58b401_95876332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57aadf1e58b401_95876332')) {function content_57aadf1e58b401_95876332($_smarty_tpl) {?>
" method="post">
img/boton_terminar_compra.png" alt="" class="ecb f_left" />
</p>

" method="post" onsubmit="$('#paypal_express_checkout_id_product_attribute').val($('#idCombination').val());                      $('#paypal_express_checkout_quantity').val($('#quantity_wanted').val());">
" />
/img/accpmark_tarjdeb_mx.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/img/express_checkout_mx.png<?php }?>" alt=""/>