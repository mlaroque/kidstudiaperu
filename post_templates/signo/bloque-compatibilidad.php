<?php global $post, $comp_img, $comp_title, $comp_clase, $comp_si_values, $comp_no_values, $comp_como_es, $comp_buen, $comp_se_lleva, $comp_no_soporta;?>


<div class="container signo">
	<div class="row">
		<div class="col-12 text-center">
			<h2 id="<?php echo $comp_clase;?>" class="<?php echo $comp_clase;?>D"><?php echo $comp_title;?></h2>
		</div>

		<div class="clearfix"></div>

		<div class="col-12 col-md-4">
			<img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo $comp_img;?>" class="lazy-img">
		</div>
		<div class="col-12 col-md-8">
			<div class="row">
				<?php $comp_si_arr = explode(";", get_post_meta($post->ID, $comp_si_values[1], true));?>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b><?php echo $comp_si_values[0];?></b></p>
					<table>
						<tr>
							<?php foreach($comp_si_arr as $signo):?>
								<td valign="middle"><img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value($signo,'svg');?>" class="lazy-img">
									<br/>
								<small><?php echo strtoupper($signo);?></small></td>
							<?php endforeach;?>
						</tr>
					</table>
					</div>
				</div>
				<?php $comp_no_arr = explode(";", get_post_meta($post->ID, $comp_no_values[1], true));?>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center">
					<div class="shadow compatiblidad">
					<p><b><?php echo $comp_no_values[0];?></b></p>
					<table>
						<tr>
							<?php foreach($comp_no_arr as $signo):?>
								<td valign="middle"><img src="<?php echo get_template_directory_uri() . '/images/trans.gif';?>" data-src="<?php echo get_image_by_value($signo,'svg');?>" class="lazy-img">
									<br/>
								<small><?php echo strtoupper($signo);?></small></td>
							<?php endforeach;?>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-50">
			<div class="clearfix"></div>
			<div class="col-12">
			<?php if($comp_se_lleva):?>
				<p><b class="<?php echo $comp_clase;?>"><?php echo $comp_se_lleva[0];?></b> <?php echo get_post_meta($post->ID, $comp_se_lleva[1], true);	?></p>
				<p><b class="<?php echo $comp_clase;?>"><?php echo $comp_no_soporta[0];?></b> <?php echo get_post_meta($post->ID, $comp_no_soporta[1], true);	?></p>
			<?php endif;?>
			<p><b class="<?php echo $comp_clase;?>"><?php echo $comp_como_es[0];?></b> <?php echo get_post_meta($post->ID, $comp_como_es[1], true);	?></p>
			<p><b class="<?php echo $comp_clase;?>"><?php echo $comp_buen[0];?> </b> <?php echo get_post_meta($post->ID, $comp_buen[1], true);	?></p>
		</div>
		</div>
	</div>
</div>