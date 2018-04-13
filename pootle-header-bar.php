<?php
/*
Plugin Name: PootlePress header bar
Description: Header bar for PootlePress
Version: 1.0
Author: Shramee Srivastav
Author URI: http://shramee.com
Author Email: shramee.srivastav@gmail.com
*/

function pootlepress_header_bar_btn( $url, $label, $attr = '' ) {
	?>
	<a class="pphb-btn" <?php echo $attr ?> href="https://www.pootlepress.com/<?php echo $url ?>">
		<i class="fa fa-wordpress"></i> <?php echo $label ?></a>
	<?php
}

function pootlepress_header_bar() {
	wp_enqueue_style( 'pphb-css', plugin_dir_url( __FILE__ ) . '/assets/pphb.css' );
	?>
	<div class="pp-topbar">
		<div class="pphb-popular">
			<h4><span not-on-mobile>Our most popular WordPress plugins</span><span mobile-only>Popular products</span></h4>
			<?php
			pootlepress_header_bar_btn( 'pootle-pagebuilder-pro/', 'Pagebuilder Pro', 'style="background:#cf6c69"' );
			pootlepress_header_bar_btn( 'shop/storefront-pro/', 'Storefront Pro', 'style="background:#21a6ce"' );
			pootlepress_header_bar_btn( '18-tags-pro/', '18 Tags Pro', 'style="background:#a669e2"' );
			echo '<span mobile-only>';
			pootlepress_header_bar_btn( 'pootle-bundles/', 'Get a Bundle', 'style="background:#eb3f5f"' );
			echo '</span>';
			?>
		</div>

		<div class="pphb-trail"></div>
		<img src="<?php echo plugin_dir_url( __FILE__ ) ?>/assets/wilson.png" class="wilson" alt="Wilson">
		<div class="pphb-trail-bundle"><div class="pphb-trail"></div></div>

		<div class="pphb-bundle">
			<span class="pphb-or">OR</span>
			<?php pootlepress_header_bar_btn( 'pootle-bundles/', 'Get a Bundle', 'style="background:#eb3f5f"' ); ?>
		</div>

	</div>
	<?php
}

add_action( 'eighteen_tags_before_header', 'pootlepress_header_bar' );
add_action( 'storefront_before_header', 'pootlepress_header_bar' );
add_action( 'caxton_before_header', 'pootlepress_header_bar' );
