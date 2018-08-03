<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reen-from-PSD
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

				<div class="col-md-3 col-sm-12">
					<aside id="secondary" class="widget-area">

									
					<?php dynamic_sidebar( 'sidebar-1' ); ?>

					</aside>

				</div>
			</div> <!-- #row -->
		</div> <!-- #container -->
	</div> <!-- #main -->

