<?php
  global $accordion_btn_text, $accordion_content, $accordion_id, $h2_btn_id, $with_h2, $info_txt;

  if(ltrim($accordion_content)): //Si no tiene contenido no se muestra
?>
<?php if($with_h2):?>
	<h2 <?php echo $h2_btn_id;?>><?php echo $accordion_btn_text;?></h2>
	<?php $accordion_btn_text = "Ver info de " . $info_txt;?>
<?php endif;?>
<button onclick="toggleAccordionContent('<?php echo $accordion_id;?>');" class="btn btn-accordion"> <?php echo $accordion_btn_text;?> <b class="plus">+</b></button>

<div id="<?php echo $accordion_id;?>" class="accordionIn" style="display:none;">

    <?php echo $accordion_content;?>
</div>
<?php endif; ?>