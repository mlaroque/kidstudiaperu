<!--wIDGEt SOLO PARA HorOSCOPOS

<div class="container-fluid widgets w-horoscoposBox">
	<div class="row">
		<div class="col-6 col-sm-3 text-center marPad0 w-horoscopos w-horoscopos-hoy">
			<a href="#">
				<p class="w-horoscopos-sub">HORÓSCOPO</p>
				<p class="w-horoscopos-tit">HOY</p>
			</a>
		</div>	
		<div class="col-6 col-sm-3 text-center marPad0 w-horoscopos w-horoscopos-semana">
			<a href="#">
				<p class="w-horoscopos-sub">HORÓSCOPO</p>
				<p class="w-horoscopos-tit">SEMANA</p>
			</a>
		</div>	
		<div class="col-6 col-sm-3 text-center marPad0 w-horoscopos w-horoscopos-mes">
			<a href="#">
				<p class="w-horoscopos-sub">HORÓSCOPO</p>
				<p class="w-horoscopos-tit">MES</p>
			</a>
		</div>	
		<div class="col-6 col-sm-3 text-center marPad0 w-horoscopos w-horoscopos-ano">
			<a href="#">
				<p class="w-horoscopos-sub">HORÓSCOPO</p>
				<p class="w-horoscopos-tit">AÑO</p>
			</a>
		</div>	
	</div>
</div>
-->

<!--WIDGET SIGNOS
<div class="container-fluid widgets">
	<div class="row">
		<div class="col-12 text-center">
			<h2>¿Quieres descubrir otros signos?</h2>
		</div>
		<div class="w_signos d-inline w-100 text-center">
			<ul>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
				<li>
					<a href="#">
					<img src="https://astrologuias.com/wp-content/uploads/2020/02/signo-aries.jpg">
					<p><small>Sagitario</small></p></a>
				</li>
			</ul>
		</div>
	</div>
</div>

-->


<!--FOOTER B -->
<footer role="contentinfo">
	<div class="container foot">
		
		<div class="row">
			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
				<?php endif; ?>
			</div>

			<div class="col-12">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-5') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


<div class="container-fluid footHori">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hori') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 footSx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hsx') ) : ?>
			<?php endif; ?>
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6  footDx">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-hdx') ) : ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="row copy">
		<div class="col-12">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('copyright') ) : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</footer>

<?php
	wp_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lazy-load.js"></script>
</div>
</body>
</html>