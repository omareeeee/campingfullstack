<div class="container">
	<div id="da-slider" class="da-slider">
		<div class="da-slide">
			<h2>Camping "La Junta"</h2>
			<p>Mejor valorado</p>
			<div class="da-img"><img src="images/img.jpg" alt="img"></div>
			/*<div class=""></div>*/
		</div>

		<div class="da-slide">
			<h2>Camping "Huilo Huilo"</h2>
			<p>Segunda mejor valoración</p>
			<div class="da-img"><img src="images/img1.jpg" alt="img1"></div>
		</div>

		<div class="da-slide">
			<h2>Camping "Caleta Pan de Azucar"</h2>
			<p>Tercera mejor valoración</p>
			<div class="da-img"><img src="images/img2.jpg" alt="img2"></div>
		</div>

		<nav class="da-arrows">
			<spam class="da-arrows-prev"></spam>
			<spam class="da-arrows-next"></spam>
		</nav>
	</div>
</div>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript">
	$(function(){
		$('#da-slider').cslider({
			autoplay:false,
			bgincrement:650
		});
	});
</script>