<header class="instant-contact-header">
	<h1>Instant Contact</h1>
	<small>Version <?php echo INSTANT_CONTACT_VER; ?></small>
</header>

<div id="instant-contact">
	<div class="row">
		<div class="col-8">
			<div class="widget">
				<h3>Options</h3>
				<form method="post" id="instant-contact-form">
					<input type="checkbox" id="enable" name="enable" value="yes" <?php instantContact_checked('enable', 'yes') ?> />
					<div class="instant-contact-option for-enable">
						<label>Enable</label>
						<label class="switch" for="enable"></label>
					</div>
					<div class="instant-contact-option">
						<label>Heading</label>
						<input type="text" name="heading" value="<?php echo esc_attr(instantContact_getOption('heading')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Form Shortcode</label>
						<textarea name="form" rows="5"><?php echo esc_attr(instantContact_getOption('form')); ?></textarea>
					</div>
					<div class="instant-contact-option">
						<label>Box Width</label>
						<input type="text" name="chat_width" value="<?php echo esc_attr(instantContact_getOption('chat_width')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Distance From Right</label>
						<input type="text" name="from_right" value="<?php echo esc_attr(instantContact_getOption('from_right')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Distance From Bottom</label>
						<input type="text" name="from_bottom" value="<?php echo esc_attr(instantContact_getOption('from_bottom')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Main Color</label>
						<input type="color" name="heading_bg" value="<?php echo esc_attr(instantContact_getOption('color')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Heading color</label>
						<input type="color" name="heading_color" value="<?php echo esc_attr(instantContact_getOption('heading_color')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Form Background</label>
						<input type="color" name="form_bg" value="<?php echo esc_attr(instantContact_getOption('form_bg')); ?>" />
					</div>
					<div class="instant-contact-option">
						<label>Animation</label>
						<select name="animation">
							<option value="slide" <?php instantContact_selected('animation', 'slide') ?>>Slide</option>
							<option value="fade" <?php instantContact_selected('animation', 'fade') ?>>Fade</option>
						</select>
					</div>
					<div class="instant-contact-option">
						<label>Animation Speed</label>
						<input type="text" name="animation_speed" value="<?php echo esc_attr(instantContact_getOption('animation_speed')); ?>" />
					</div>
					<div class="instant-contact-option instant-contact-submit">
						<input type="submit" name="instantContact_submit" class="button button-primary button-large" value="Update Options" />
						<span class="spinner"></span>
					</div>
				</form>
			</div>
		</div>
		<div class="col-4">
			<div class="widget instant-contact-about">
				<h3>About Us</h3>
				<p>We are full-stack web developers with a focus on best practices and testing to insure quality, readable and efficient code and reliable infrastructure. Over 5+ years of experience in the Tech World, we have delivered 100's of successful solutions for small to medium level organizations. We can help you with:</p>
				<ul>
					<li>PHP and Java development</li>
					<li>WordPress theme design &amp; plugin development</li>
					<li>Laravel &amp; CodeIgniter development</li>
					<li>Git, SVN</li>
					<li>API integration &amp; development</li>
					<li>Internet marketing analytics &amp; tracking </li>
					<li>AdWords / Webmasters / SEO</li>
				</ul>
				<a href="mailto:faisal.mughal.iefr@gmail.com">Need help? Contact us</a>
			</div>
		</div>
	</div>
</div>

<div id="toast-container" style="display: none">
	<div class="toast toast-success">Option Updated</div>
</div>