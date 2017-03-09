<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */
?>
<?php
if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
	<div id="tertiary" class="sidebar-container" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'widget-area-1' ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
