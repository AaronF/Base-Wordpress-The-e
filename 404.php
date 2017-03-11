<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="error404">
				<div class="title">
					<h3><?php _e( 'These are not the droids you are looking for.', 'WP-Skeleton' ); ?></h3>
				</div>

				<div class="entry-content">
					<p><?php _e( '404 - It seems we can&rsquo;t find what you&rsquo;re looking for.', 'WP-Skeleton' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
