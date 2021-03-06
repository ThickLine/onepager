<?php
	// Content Animation
	$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['content_animation'].'"' : '';
	// Content Alignment
	$content_alignment = ($settings['content_alignment']) ? $settings['content_alignment'] : '';
?>
<section id="<?php echo $id;?>" class="fp-section uk-position-relative cta cta-2 " <?php echo ($styles['bg_parallax']) ? 'uk-parallax="bgy: -200"' : '' ?> tabindex="-1" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-section">
		<div class="uk-overlay-primary uk-position-cover"></div>
		<div class="uk-container">
			<div class="uk-grid-large uk-position-relative" <?php echo $content_animation;?> uk-grid>
				<div class="uk-width-1-1">
					<div class="uk-text-<?php echo $content_alignment;?>">
						<!-- Image -->
						<?php if($contents['image']) :?>
							<img class="op-media" src="<?php echo $contents['image'];?>" alt="<?php echo $contents['title'];?>">
						<?php endif; ?>

						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?> <?php echo $settings['title_size'];?>"><?php echo $contents['title'];?></h1>
						<?php endif; ?>

						<!-- Description -->
						<?php if($contents['description']): ?>
							<div class="uk-text-lead"><?php echo $contents['description'];?></div>
						<?php endif; ?>
						<!-- Link -->
						<?php echo op_link($contents['link'], 'uk-margin-medium-top uk-button uk-button-primary uk-button-large');?>
					</div> <!-- text-alignment -->

				</div> <!-- uk-grid-1 -->
			</div><!-- uk-grid-large -->
		</div><!-- uk-container -->
	</div>
</section> <!-- end-section -->
