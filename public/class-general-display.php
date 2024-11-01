<?php
add_action('wp_head', 'satc_hide_price_on_minicart', 9999);
function satc_hide_price_on_minicart(){
	if (is_product()) {
	?>
		<style>
			a.cart-contents span.woocommerce-Price-amount.amount {
				display: none !important;
			}
		</style>
	<?php
	$satc_settings = get_option('satc_settings');
	if (isset($satc_settings['satc_checkbox_field_88'])) {
					?>
						<style>
							img.satc-fixed-cart-image {
								background-color: #fff;
    border: 1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
    padding: 5px;
							}
							
</style>
<?php
	}
	}
}


add_action('wp_head', 'satc_quantity_font_size', 9999);
function satc_quantity_font_size(){
	$satc_settings = get_option('satc_settings');
	if (is_product()) {
		if (isset($satc_settings['satc_text_field_92']) && $satc_settings['satc_text_field_92']) {
			?>
				<style>
					.satc-fixed-add-to-cart-button, .single_add_to_cart_button2.button.alt, .sticky-button .single_add_to_cart_button.button.alt, #satc-fixed-bar-variations .sticky-button .single_add_to_cart_button.button.alt {
						font-size: <?php echo $satc_settings['satc_text_field_92']; ?>px !important;
						}
					.quant .input-text.qty.text {
						height: calc( <?php echo $satc_settings['satc_text_field_96']; ?>px - 1px + <?php echo $satc_settings['satc_text_field_93']; ?>px - 1px + <?php echo $satc_settings['satc_text_field_92']; ?>px ) !important;
					}
				</style>
			<?php
		}
	}
}

add_action( 'woocommerce_single_product_summary', 'satc_add_div_below_cart_form', 60 );
function satc_add_div_below_cart_form(){
	if (is_product()) {
	echo '<div class="satc-focus-scroll-point"></div>';
	}
}


add_action('wp_footer', 'satcwoo_add_cart_link', 999);
function satcwoo_add_cart_link(){
	global $woocommerce;
$cart_page_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
	?>
<script type="text/javascript">
jQuery("button.single_add_to_cart_button2").click(function () {
  jQuery(".sticky-button").append('<a class="added-to-cart" href="<?php echo $cart_page_url; ?>"></a>');
});
</script>
<?php
}