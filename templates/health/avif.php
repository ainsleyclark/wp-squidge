<?php

/**
 * avif
 *
 * AVIF health status template.
 *
 * @package     Squidge
 * @version     0.1.0
 * @author      Ainsley Clark
 * @category    Templates
 * @repo        https://github.com/ainsleyclark/wp-squidge
 *
 */

global $health_valid;

?>

<?php if ($health_valid) : ?>
	<h4>avifenc library installed.</h4>
<?php else : ?>
	<h4>avifenc <strong>not</strong> installed.</h4>
	<p>Use the following commands to install avifenc dependant on your operating system.</p>
	<!-- Linux -->
	<div>
		<h3>Linux:</h3>
		<code>
			sudo apt-get install libavif
		</code>
		<p>For more information visit <a href="https://www.interserver.net/tips/kb/install-and-serve-webp-images-on-ubuntu/" target="_blank">here</a>.</p>
	</div>
	<!-- Mac -->
	<div>
		<h3>Mac:</h3>
		<code>brew install libavif</code>
		<p>For more information visit <a href="https://formulae.brew.sh/formula/libavif" target="_blank">here</a>.</p>
	</div>
	<!-- Windows -->
	<div>
		<h3>Windows:</h3>
		<p>To install for Windows, visit <a href="https://github.com/AOMediaCodec/libavif/releases" target="_blank">here</a>.</p>
	</div>
<?php endif;
