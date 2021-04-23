<?php
/* Smarty version 3.1.33, created on 2021-04-19 23:32:50
  from '/home/robertor/public_html/portaldoc/modules/elevatezoom/elevatezoom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_607e4b620ac971_79586283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7422dc21952f910cea5c8a54704f3f22b564e1e0' => 
    array (
      0 => '/home/robertor/public_html/portaldoc/modules/elevatezoom/elevatezoom.tpl',
      1 => 1618411761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e4b620ac971_79586283 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Begin elevateZoom Header block -->
<?php echo '<script'; ?>
 >
	var zoom_type = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_type']->value, ENT_QUOTES, 'UTF-8');?>
';
	var zoom_fade_in = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_fade_in']->value, ENT_QUOTES, 'UTF-8');?>
;
    var zoom_fade_out = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_fade_out']->value, ENT_QUOTES, 'UTF-8');?>
;
	var zoom_cursor_type = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_cursor_type']->value, ENT_QUOTES, 'UTF-8');?>
';
	<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl'] != 1) {?>
	    var zoom_window_pos = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_window_pos']->value, ENT_QUOTES, 'UTF-8');?>
;
	<?php } elseif ($_smarty_tpl->tpl_vars['zoom_window_pos']->value == 1) {?>
	    var zoom_window_pos = 11;
	<?php }?>
	var zoom_scroll = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_scroll']->value, ENT_QUOTES, 'UTF-8');?>
;
	var zoom_easing = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_easing']->value, ENT_QUOTES, 'UTF-8');?>
;
	var zoom_tint = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_tint']->value, ENT_QUOTES, 'UTF-8');?>
;
	var zoom_tint_color = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_tint_color']->value, ENT_QUOTES, 'UTF-8');?>
';
	var zoom_tint_opacity = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_tint_opacity']->value, ENT_QUOTES, 'UTF-8');?>
;
    var zoom_lens_shape = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_lens_shape']->value, ENT_QUOTES, 'UTF-8');?>
';
    var zoom_lens_size  = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_lens_size']->value, ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 >
<?php if ($_smarty_tpl->tpl_vars['zoom_product']->value == 1) {?>
	function applyElevateZoom(){
		var bigimage = $('.js-qv-product-cover').attr('src'); 
		$('.js-qv-product-cover').elevateZoom({
			zoomType: zoom_type,
			cursor: zoom_cursor_type,
			zoomWindowFadeIn: zoom_fade_in,
			zoomWindowFadeOut: zoom_fade_out,
			zoomWindowPosition: zoom_window_pos,
			scrollZoom: zoom_scroll,
			easing: zoom_easing,
			tint: zoom_tint,
			tintColour: zoom_tint_color,
			tintOpacity: zoom_tint_opacity,
			lensShape: zoom_lens_shape,
			lensSize: zoom_lens_size,
			zoomImage: bigimage<?php if (preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['zoom_extra_params']->value) != '') {?>,
			<?php echo $_smarty_tpl->tpl_vars['zoom_extra_params']->value;?>
 <?php }?>
	   });
	}
	$(document).ready(function(e) {
		if($(".zoomContainer").length){
		$(".zoomContainer").remove();	
		}
		applyElevateZoom();
		$(document).on('click','.input-color',function(e) {
            restartElevateZoom();
        });
		$(document).on('click','.js-qv-mask img.thumb',function(e) {
            restartElevateZoom();
        });
	});	
<?php }?>

	function restartElevateZoom(){
		$(".zoomContainer").remove();
		applyElevateZoom();
	}

<?php if ($_smarty_tpl->tpl_vars['zoom_other']->value == 1) {?>
	$(document).ready(function(){
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zoom_other_code']->value, ENT_QUOTES, 'UTF-8');?>

	});
<?php }
echo '</script'; ?>
>
<!-- End elevateZoom Header block -->
<?php }
}
