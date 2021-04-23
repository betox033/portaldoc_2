<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/modules/fieldmegamenu/views/templates/hook/fieldmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b624966f5_49571548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fbea0a6b2574c155c54b0a8dd4533d26286dd0' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/modules/fieldmegamenu/views/templates/hook/fieldmegamenu.tpl',
      1 => 1618411762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b624966f5_49571548 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['fieldmegamenu']->value) && $_smarty_tpl->tpl_vars['fieldmegamenu']->value)) {?>

    <nav id="fieldmegamenu<?php if (isset($_smarty_tpl->tpl_vars['fieldmegamenumobile']->value) && $_smarty_tpl->tpl_vars['fieldmegamenumobile']->value) {?>-mobile<?php } else { ?>-main<?php }?>" class="fieldmegamenu inactive">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldmegamenu']->value, 'root');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['root']->value) {
?>

                <li class="root root-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->id_fieldmegamenu, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->menu_class, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="root-item<?php if ($_smarty_tpl->tpl_vars['root']->value->description == '') {?> no-description<?php }?>">

                        <?php if ($_smarty_tpl->tpl_vars['root']->value->link != '') {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['root']->value->open_in_new) {?>target="_blank"<?php }?>><?php }?>
                            <div class="title title_font"><?php if ($_smarty_tpl->tpl_vars['root']->value->icon_class != '') {?><span class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
"></span><?php }?><span class="title-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->title, ENT_QUOTES, 'UTF-8');?>
</span><?php if (isset($_smarty_tpl->tpl_vars['root']->value->items)) {?><span class="icon-has-sub fa fa-angle-down"></span><?php }?></div>
                            <?php if ($_smarty_tpl->tpl_vars['root']->value->description != '') {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['root']->value->description;?>
</span><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['root']->value->link != '') {?></a><?php }?>

                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['root']->value->items)) {?>
                        <ul class="menu-items <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root']->value->width_popup_class, ENT_QUOTES, 'UTF-8');?>
 col-xs-12">

                            <?php $_smarty_tpl->_assignInScope('depth', 1);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['root']->value->items, 'menuItem');
$_smarty_tpl->tpl_vars['menuItem']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->index++;
$__foreach_menuItem_12_saved = $_smarty_tpl->tpl_vars['menuItem'];
?>
                                <?php if (($_smarty_tpl->tpl_vars['menuItem']->value->depth > $_smarty_tpl->tpl_vars['depth']->value)) {?>
                                    <ul class="submenu submenu-depth-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->depth, ENT_QUOTES, 'UTF-8');?>
">
                                <?php } elseif (($_smarty_tpl->tpl_vars['menuItem']->value->depth < $_smarty_tpl->tpl_vars['depth']->value)) {?>
                                    <?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['menuItem']->value->depth));?>

                                <?php }?>

                                    <li class="menu-item menu-item-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->id, ENT_QUOTES, 'UTF-8');?>
 depth-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->depth, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->menu_layout, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->menu_class, ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->image) && $_smarty_tpl->tpl_vars['menuItem']->value->image) {?> withimage<?php }?>">

                                        <?php if (($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'customlink' || $_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'category' || $_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'cmspage')) {?>

                                            <div class="title<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->depth == 1 && $_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name !== 'cmspage') {?> title_font<?php }?>">
                                                <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->link != '') {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>><?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->icon_class != '') {?><span class="icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>

                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->description != '') {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->description;?>
</span><?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->link != '') {?></a><?php }?>
                                            </div>

                                        <?php } elseif (($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'product')) {?>
					    <div class="horizontal_mode">
                            <div class="item-inner">
                            <div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->product['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->product['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
                            <div class="left-product">
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->image) && $_smarty_tpl->tpl_vars['menuItem']->value->image) {?>
                            <a class="thumbnail product-thumbnail" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                            <span class="cover_image">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->image, ENT_QUOTES, 'UTF-8');?>
" alt=""/>
                            </span>
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->second_image) && $_smarty_tpl->tpl_vars['menuItem']->value->second_image) {?>
                            <span class="hover_image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->second_image, ENT_QUOTES, 'UTF-8');?>
" alt=""/></span>
                            <?php }?>
                            
                            </a>
                            <?php }?>
                            <div class="button-action">
                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->product['id_product'], ENT_QUOTES, 'UTF-8');?>
">
                             <button class="add-to-cart" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['menuItem']->value->product['quantity']) {?>disabled<?php }?>>
                            
                            <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->product['quantity']) {?>
                            <i class="fa fa-shopping-cart"></i>
                            <?php } else { ?>
                            <i class="fa fa-ban"></i>
                            <?php }?>  
                            </button>
                            </form>
                          <a href="javascript:void(0)" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','mod'=>'fieldmegamenu'),$_smarty_tpl ) );?>
"> 
                            <i class="fa fa-eye"></i>
                          </a>
                            </div>
                            </div>
                            <div class="right-product">       
                            <div class="product-description">
                            <div class="product_name"><a class="product-name" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menuItem']->value->link,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->icon_class != '') {?><span class="icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['menuItem']->value->title,45,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->description != '') {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->description;?>
</span><?php }?>
                            </a></div> 
                            <div class="product-price-and-shipping">
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->price) && !empty($_smarty_tpl->tpl_vars['menuItem']->value->price)) {?>
                            <span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->price, ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->old_price) && !empty($_smarty_tpl->tpl_vars['menuItem']->value->old_price)) {?>
                            <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->old_price, ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->reduction_price) && !empty($_smarty_tpl->tpl_vars['menuItem']->value->reduction_price)) {?>
                            <span class="discount-percentage-product">-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->reduction_price, ENT_QUOTES, 'UTF-8');?>
%</span>
                            <?php }?>
                            </div>         
                            </div>
                            
                            </div>
                            </div>
                            </div>
                            </div>

                                        <?php } elseif (($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'manufacturer')) {?>

                                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->image) && $_smarty_tpl->tpl_vars['menuItem']->value->image) {?>
                                                <a class="white-border-3px img-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                                                    <div class="manufacturer-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->image, ENT_QUOTES, 'UTF-8');?>
" /></div>
                                                </a>
                                            <?php }?>
                                            <div class="title">
                                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->icon_class != '') {?><span class="icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo $_smarty_tpl->tpl_vars['menuItem']->value->title;?>

                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->description != '') {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->description;?>
</span><?php }?>
                                                </a>
                                            </div>

                                        <?php } elseif (($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'supplier')) {?>

                                            <?php if (isset($_smarty_tpl->tpl_vars['menuItem']->value->image) && $_smarty_tpl->tpl_vars['menuItem']->value->image) {?>
                                                <a class="white-border-3px img-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                                                    <div class="supplier-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->image, ENT_QUOTES, 'UTF-8');?>
" /></div>
                                                </a>
                                            <?php }?>
                                            <div class="title">
                                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->link, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->open_in_new) {?>target="_blank"<?php }?>>
                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->icon_class != '') {?><span class="icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->icon_class, ENT_QUOTES, 'UTF-8');?>
"></span><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value->title, ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->description != '') {?><span class="description"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->description;?>
</span><?php }?>
                                                </a>
                                            </div>

                                        <?php } elseif (($_smarty_tpl->tpl_vars['menuItem']->value->menu_type_name == 'customcontent')) {?>

                                            <div class="normalized">
                                                    <?php echo $_smarty_tpl->tpl_vars['menuItem']->value->content;?>

                                            </div>

                                        <?php }?>


                                <?php if (($_smarty_tpl->tpl_vars['menuItem']->index != (count($_smarty_tpl->tpl_vars['root']->value->items)-1)) && ($_smarty_tpl->tpl_vars['root']->value->items[($_smarty_tpl->tpl_vars['menuItem']->index+1)]->depth <= $_smarty_tpl->tpl_vars['menuItem']->value->depth)) {?>
                                    </li>
                                <?php }?>

                                <?php $_smarty_tpl->_assignInScope('depth', $_smarty_tpl->tpl_vars['menuItem']->value->depth);?>

                                <?php if (($_smarty_tpl->tpl_vars['menuItem']->index == count($_smarty_tpl->tpl_vars['root']->value->items)-1)) {?>
                                    </li><?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['depth']->value-1));?>

                                <?php }?>

                            <?php
$_smarty_tpl->tpl_vars['menuItem'] = $__foreach_menuItem_12_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>

                </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </nav>

<?php }
}
}
