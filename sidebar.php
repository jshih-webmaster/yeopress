<?php
/**
 * Top Widget Template
 */

if ( !is_active_sidebar( 'main-sidebar' )) {
	return;
}
?>
<aside id="page-sidebar">
	<ul>
		<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>

		<?php endif; ?>
	</ul>
</aside>
