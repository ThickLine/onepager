<?php
	$image_cols = $settings['media_grid'];
	$content_cols = 12 - $image_cols; // Default 12 grid 
	// Animation
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	$animation_delay = 0.1;

	// Arguments
	$args = array(
		'posts_per_page'   => $contents['total_posts'],
		'category'         => $contents['category'],
	);
	// Build query
	$query = new WP_Query( $args );
?>

<section id="<?php echo $id;?>" class="op-section blogs blog-1">
	<div class="container">
	
		<?php if($contents['title']):?>
			<!-- Section Title -->
			<h1 class="section-title text-center wow fadeInDown">
				<?php echo $contents['title']?>
			</h1>
		<?php endif; ?>

		<?php if($contents['description']):?>
			<!-- Section Sub Title -->
			<p class="section-subtitle text-center wow fadeInDown">
				<?php echo $contents['description']?>
			</p>
		<?php endif; ?>
		
		<!-- WP Posts -->
		<?php if( $query->have_posts() ) : ?>
			<?php while( $query->have_posts() ) : $query->the_post(); ?>
			<div class="row wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.1 ?>s">
				<div class="col-md-<?php echo $image_cols?>">
					<?php the_post_thumbnail('', array('', 'class'=> 'img-responsive')); ?> 
				</div>
				
				<div class="col-md-<?php echo $content_cols ?>">	
					<h2 class="title <?php echo $settings['title_transformation']?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					 <?php op_the_excerpt($contents['text_limit'], $settings['readmore_text']); ?> 
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</section>
