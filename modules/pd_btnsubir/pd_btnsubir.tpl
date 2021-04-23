









<style type="text/css">
	.btn_subir{
		position: fixed;
		bottom: 20px;
		right: 10px;
		width: 50px;
		cursor: pointer;
		transition: .3s;
		z-index: 20;
	}
	.back-to-top{
		display: none !important;
	}
	html {
  		scroll-behavior: smooth;
	}
</style>



<img src="{$ruta_img_pd_btnsubir}21.png" class="btn_subir">

<script type="text/javascript">
	$(".btn_subir").unbind('click').click(function(){
		window.scrollTo(0, 0);
	});
	$(window).scroll(function() {
		if ($(document).scrollTop() > 150) {
			$('.btn_subir').css("opacity", 1);
		}
		else {
			$('.btn_subir').css("opacity", 0);
		}
	});
</script>