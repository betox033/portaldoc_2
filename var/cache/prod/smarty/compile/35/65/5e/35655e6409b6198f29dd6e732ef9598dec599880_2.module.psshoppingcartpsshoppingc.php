<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b623ccfb2_23699953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1618411765,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b623ccfb2_23699953 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div id="cart_block_top" class="sticky_top">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="click-cart">
        <span class="unline_cart">
            <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="cart-item-top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Cart'),$_smarty_tpl ) );?>
</span>
            <span class="cart-total-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
         </span>
        <span class="shopping-cart">
        <span class="fa fa-shopping-basket">
        </span>
        <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
        </span>
        </div>
<div class="cart_top_ajax">
<?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
<div class="box-item">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
	<div class="cart-item-product">
          <a class="cart-item-product-left" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          	<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
" 
            <?php if (isset($_smarty_tpl->tpl_vars['size_cart_default']->value['width'])) {?>width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size_cart_default']->value['width'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
           <?php if (isset($_smarty_tpl->tpl_vars['size_cart_default']->value['height'])) {?>height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['size_cart_default']->value['height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> 
            >
          </a>
          <div class="cart-item-product-right">
          	  <div class="product-name-ajax">
              	<span class="qtt-ajax"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 x </span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
              </div>
              <div class="product-line-info-top">
                  <span class="value price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                    <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
                  <?php }?>
               </div>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
              <div class="product-line-info-top">
                <span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                <span class="value-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          <a
                  class                       = "remove-from-cart"
                  rel                         = "nofollow"
                  href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                  data-link-action            = "delete-from-cart"
                  data-id-product             = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                  data-id-product-attribute   = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                  data-id-customization   	  = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <i class="fa fa-times-circle"></i>
            <?php }?>
            </a>
    </div>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
   </div>
   <div class="card-block-top">
       <div class="totals-top">
           <span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
           <span class="value-top price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
       </div>
       <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['type'] === 'shipping') {?>
           <div class="totals-top">
               <span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
               <span class="value-top price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
           </div>
       <?php }?>
   </div>
    <?php } else { ?>
      <div class="card-block-top" style="border-top:none">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  <div class="card-block-top">
    <div class="totals-top">
      <span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value-top price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
    <div class="totals-top">
      <span class="label-top"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value-top price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  </div>
  <div class="card-block-top">
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="view-cart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  </div>
</div>
<?php echo '<script'; ?>
 >
$(document).ready(function () {
	$(".click-cart").click(function(e) {
        $(".cart_top_ajax").slideToggle();
		$(".click-cart").toggleClass('active');
		
		e.stopPropagation();
    });
	$("body").click(function(e) {
         $(".cart_top_ajax").slideUp();
		 $(".click-cart").removeClass('active');
    });
});
<?php echo '</script'; ?>
>
</div>
</div>

<?php }
}
