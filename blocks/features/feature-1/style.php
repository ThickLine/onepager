#<?php echo $id ?>{
	<?php if($styles['bg_image']):?>
	background-image: url(<?php echo $styles['bg_image']?>);
	background-repeat: <?php echo $styles['bg_repeat']?>;
	<?php endif;?>
	background-color : <?php echo $styles['bg_color'] ?>;
	
}
#<?php echo $id ?> .uk-heading-primary {
	font-size : <?php echo $settings['title_size']?>px;
	color : <?php echo $styles['title_color']?>;
}
#<?php echo $id ?> .uk-text-lead {
	font-size : <?php echo $settings['desc_size']?>px;
	color : <?php echo $styles['text_color']?>;
}
#<?php echo $id ?> .uk-button{
	background: <?php echo $styles['button_bg_color']?>;
	color : <?php echo $styles['button_text_color']?>;
}

#<?php echo $id ?> .uk-button:hover{
	background: <?php echo $styles['button_text_color']?>;
	color : <?php echo $styles['button_bg_color']?>;
	border-color : <?php echo $styles['button_bg_color']?>;
}

