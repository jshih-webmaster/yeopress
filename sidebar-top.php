<?php
/**
 * Top Widget Template
 */

if ( !is_active_sidebar( 'top-widget' )) {
	return;
}
?>
<div id="top-widget" class="top-widget">
	<ul>
		<?php if ( dynamic_sidebar( 'top-widget' ) ) : else : endif; ?>
	</ul>
</div>