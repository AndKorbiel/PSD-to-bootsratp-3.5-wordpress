<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reen-from-PSD
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
	
		<div class="container">
		
			<div class="row">
			
				<div class="col-lg-3">
					<?php
						if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
						}
					?>
				</div>
				
				<div class="col-lg-3">
					<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
					?>

				</div>
				
				<div class="col-lg-3">
					<?php
						if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
						}
					?>
				</div>
				
				<div class="col-lg-3">
					<?php
						if(is_active_sidebar('footer-sidebar-4')){
						dynamic_sidebar('footer-sidebar-4');
						}
					?>
					
				</div>
			
			</div>
		
		</div>
	
	
	</div>
	
	<div class="container-fluid foo">
	
		<div class="container">
		
		<p class="foo-left">&copy; 2018 REEN. All rights reserved.</p>
		<div class="foo-right">
			<?php
				wp_nav_menu( array( 
				    'theme_location' => 'footer',
				     'container' => false,
    				 'items_wrap' => '<ul class="foo-ul">%3$s</ul>',  ) ); 
			?>
		</div>
		
	
		</div>
		
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
