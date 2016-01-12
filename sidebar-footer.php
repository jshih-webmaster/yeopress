<?php
/**
 * Footer Widget Template
 */

if ( !is_active_sidebar( 'footer-widget' ) ) {
	return;
}
?>

<div id="footer_widget" class="footer_widget">
	<ul>
		<?php if ( ! dynamic_sidebar( 'footer-widget' ) ) : else : endif; ?>
	</ul>
</div>