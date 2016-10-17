<div id="instant-contact">
	<h4><?php echo esc_html(instantContact_getOption('heading')); ?></h4>
	<div class="instant-contact-content" style="display: none">
		<div class="inner">
			<?php echo do_shortcode(instantContact_getOption('form')); ?>
		</div>
	</div>
</div>