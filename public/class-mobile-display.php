<?php
/*=======================================================
 * 
 * Mobile options
 * 
 * =====================================================*/
add_action('wp_head', 'satc_add_mobile_css_options_in_head', 9999999);
function satc_add_mobile_css_options_in_head(){

	$satc_settings = get_option('satc_settings');
	if (is_product()) {
	if (isset($satc_settings['satc_checkbox_field_20'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
							.satc-simple-fixed-bar .inner, #satc-fixed-bar-variations .inner {
								width:95% !important;
							}
							.sticky-button {
								height:<?php echo $satc_settings['satc_text_field_200']; ?>px;
								max-width: 95%;
								width: auto;
								align-items: flex-end;
								display: flex;
								position: absolute;
								right: 0;
							}
							.satc-fixed-add-to-cart-button, .single_add_to_cart_button2.button.alt, .sticky-button .single_add_to_cart_button.button.alt{
								margin-bottom:5px;
							}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-simple-fixed-bar, #satc-fixed-bar-variations, .inner {
									display:none !important;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_32'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								img.satc-fixed-cart-image {
									display: block;
								}
								img.satc-fixed-cart-image {
									width: 40px !important;
  									height: 40px !important;
    								object-fit: cover;
    								align-items: center;
									height:calc(<?php echo $satc_settings['satc_text_field_200']; ?>px - 10px);
								}
								.satc-img {
    								position: relative;
    								top: 10px;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								img.satc-fixed-cart-image {
									display: none;
								}
								satc-img {
									display:none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_37'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-product-title {
									max-width:95%;
									text-align:left;
									position:absolute;
									top:0;
									height:<?php echo $satc_settings['satc_text_field_200']; ?>px;
									align-items: start;
									width:100%;
									justify-content: left;
									min-width: 60%;
									font-size:<?php echo $satc_settings['satc_text_field_38']; ?>px !important;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-product-title {
									display: none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_42'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-fixed-stars {
									max-width:80px;
									text-align:left;
									position:absolute;
									bottom:10px;
									left:0;
									height:auto;
									display:flex;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-fixed-stars {
									display: none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_44'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-price {
									max-width: calc(40% - 40px);
    								text-align: left;
    								height: calc(<?php echo $satc_settings['satc_text_field_200']; ?>px - 40px);
    								display: flex;
    								width: auto;
    								min-width: calc(40% - 40px);
									font-size:calc(<?php echo $satc_settings['satc_text_field_160']; ?>px - 75% )!important;
									position: relative;
    								top: 40px;
								}
								.satc-simple-fixed-bar .woocommerce-Price-amount.amount, #satc-fixed-bar-variations .woocommerce-Price-amount.amount{
									font-size:<?php echo $satc_settings['satc_text_field_46']; ?>px !important;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-fixed-stars {
									display: none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_48'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-selet td.value {
    								position: absolute;
    								top: 0;
    								right: 0;
    								z-index: 999;
								}
								.satc-selet {
    								width: 40%;
    								height: 35px;
    								overflow: hidden;
    								/* justify-content: center; */
    								/* align-items: center; */
    								display: flex;
    								position: absolute;
    								top: 0;
    								right: 0;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-selet {
									display: none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_50'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.quant {
									width: 40px;
    								margin-right: 10px;
									align-items: flex-end;
									margin-bottom: 5px;
									display:flex !important;
								}
								.quant .quantity {
    								width: 60px;
									overflow: visible !important;
								}
								.inner .input-text.qty.text {
    								width: 60px !important;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.quant {
									display: none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_53'])){
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									width: 40px;
    								margin-right: 10px;
									align-items: flex-end;
									margin-bottom: 5px;
									position: absolute;
    								top: 0;
    								right: 0;
									display: flow-root;
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									display: none;
								}
							}
						</style>
					<?php
				}
			if (isset($satc_settings['satc_select_field_190']) && $satc_settings['satc_select_field_190'] == 2) {
				if (isset($satc_settings['satc_checkbox_field_58'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.inner .fas.fa-shopping-cart {
									font-size: 22px;
    								position: absolute;
    								top: -45px;
    								left: -8px;
									right: auto;
								}
								.inner .cart-contents {
    								    position: absolute;
    								    left: 0;
    								    top: -45px;
    								    z-index: 99999;
    								    padding: 9px 5px 18px;
    								    border-radius: 50px;
    								    color: #f9f9f9;
    								    width: 35px;
    								    text-align: center;
    								    font-size: 10px;
								}
								.cart-contents:hover + .satc-cart {
    								    display: block;
    								    position: absolute;
    								    left: 24px;
    								    bottom: 120%;
    								    background-color: #f9f9f9;
    								    border: 1px solid #5b1546;
    								    transition: 0.5s;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.inner .fas.fa-shopping-cart {
									display: none;
								}
								.inner .cart-contents {
									display:none;
								}
							}
						</style>
					<?php
				}
			}
			if (isset($satc_settings['satc_select_field_190']) && $satc_settings['satc_select_field_190'] == 1) {
				if (isset($satc_settings['satc_checkbox_field_58'])) {
					?>
						<style>
							@media only screen and (max-width:600px){
								.inner .fas.fa-shopping-cart {
									font-size: 22px;
    								position: absolute;
    								bottom: -44px;
    								top: auto;
    								left: -8px;
									right: auto;
								}
								.inner .cart-contents {
    								    position: absolute;
    								    left: 0;
    								    bottom: -45px;
    									top: auto;
    								    z-index: 99999;
    								    padding: 9px 5px 18px;
    								    border-radius: 50px;
    								    color: #f9f9f9;
    								    width: 35px;
    								    text-align: center;
    								    font-size: 10px;
								}
								.cart-contents:hover + .satc-cart {
								    display: block;
								    position: absolute;
								    left: 24px;
								    top: 125%;
								    background-color: #f9f9f9;
								    border: 1px solid #5b1546;
								    transition: 0.5s;
								}
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.inner .fas.fa-shopping-cart {
									display: none;
								}
								.inner .cart-contents {
									display:none;
								}
							}
						</style>
					<?php
				}
				if (isset($satc_settings['satc_checkbox_field_53'])){
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									width: 40px;
    								margin-right: 10px;
									align-items: flex-end;
									margin-bottom: 5px;
									position: absolute;
    								top: 0;
    								right: 0;
									display: flow-root;
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									display: none;
								}
							}
						</style>
					<?php
				}
			}
			if (isset($satc_settings['satc_text_field_98']) && $satc_settings['satc_text_field_98']) {
				?>
					<style>
						@media only screen and (max-width:768px){
							.satc-fixed-add-to-cart-button, .single_add_to_cart_button2.button.alt, .sticky-button .single_add_to_cart_button.button.alt, #satc-fixed-bar-variations .sticky-button .single_add_to_cart_button.button.alt {
								font-size:<?php echo $satc_settings['satc_text_field_98']; ?>px !important;
							}
						}
					</style>
				<?php			
			}
	/*=======================================
	 * 
	 * mobile slide out display
	 * 
	 * =====================================*/
	if (isset($satc_settings['satc_select_field_190']) && $satc_settings['satc_select_field_190'] == 3) {
		?>
						<style>
							@media only screen and (max-width:600px){
								.satc-simple-fixed-bar, #satc-fixed-bar-variations {
									position:fixed;
									bottom:10%;
									right:-280px;
									width:280px;
									height:300px !important;
									z-index:99999;
									border-top:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									border-bottom:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									border-left:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
								}
									.satc-simple-fixed-bar, #satc-fixed-bar-variations{
										width:280px;
										right:-280px;
										bottom:0;
									}
								}
								.inner {
									height:300px !important;
								}
								.cart-contents:hover + .satc-cart {
									display: block;
									position: absolute;
									left: -6px;
									top: 20px;
									background-color: <?php echo $satc_settings['satc_text_field_60']; ?>;
									border: 1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									transition:0.5s;
									z-index:99;
								}
								.satc-cart table tr td {
									color:<?php echo $satc_settings['satc_text_field_156']; ?>;
									font-size:inherit !important;
								}
								.satc-cart table tr td .woocommerce-Price-amount.amount {
									font-size: inherit !important;
									font-weight: 900;
								}
								.fas.fa-arrow-up, .fas.fa-arrow-down {
									position: absolute;
									left: -35px;
									bottom: 3px;
									font-size: 30px;
									background-color: <?php echo $satc_settings['satc_text_field_60']; ?>;
									color: <?php echo $satc_settings['satc_text_field_156']; ?>;
									padding: 0 5px;
									border-left:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									border-top:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									border-right:1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
									transform: rotate(270deg);
								}
								.inner .fas.fa-shopping-cart {
									font-size: 30px;
									position: absolute;
									top: -25px;
									left: -54px;
									z-index: 99999;
									color: <?php echo $satc_settings['satc_text_field_156']; ?>;
									background: <?php echo $satc_settings['satc_text_field_60']; ?>;
									padding: 10px;
									border-radius: 50px;
									border: 1px solid <?php echo $satc_settings['satc_text_field_70']; ?>;
								}
								.inner .cart-contents {
									position: absolute;
									left: -54px;
									top: -26px;
									z-index: 99999;
									padding: 9px 5px 18px;
									border-radius: 50px;
									color: <?php echo $satc_settings['satc_text_field_60']; ?>;
									width: 55px;
									text-align: center;
								}		
									img.satc-fixed-cart-image {
									width: 80px !important;
									height: 80px !important;
									object-fit: cover;
									align-items: center;
								}
								.item1 { grid-area: satc-product-title; }
								.item2 { grid-area: satc-img; }
								.item3 { grid-area: satc-fixed-stars; }
								.item4 { grid-area: satc-selet; }
								.item5 { grid-area: satc-price; }
								.item5 { grid-area: sticky-button; }

								.inner {
									display: flex;
									grid-template-areas:
									'satc-product-title satc-product-title satc-product-title '
									'satc-img satc-price satc-price'
									'satc-fixed-stars satc-selet sticky-button ';
									grid-gap: 10px;
									padding: 10px;
									display: flex;
									position: relative;
									width: 90%;
									margin: auto;
								}
								.satc-product-title, .satc-fixed-stars, .satc-selet, .quant, .sticky-button, .satc-price {
									width:inherit !important;
									position:relative;
									display: block;
									min-width: inherit;
								}
						
								.satc-fixed-cart-image {
									width: 80px !important;
									height: 80px !important;
									object-fit: cover;
									align-items: center;
									margin-right: 30px;
									position: absolute;
								}
								.satc-img {
									position: absolute;
									top: 10px;
								}
								.satc-img {
									width: 80px;
									height: 100px;
									justify-content: center;
									align-items: center;
									display: flex;
								}
								img.satc-fixed-cart-image {
									margin:auto;
								}
								.satc-product-title {
									position: absolute;
									text-align: left;
									left: 110px;
									max-width: calc(100% - 110px);
								}
								.satc-fixed-stars {
									position: absolute;
									top: 110px;
									left: 10px;
									height: auto;
									width: 80px !important;
								}
								.satc-price {
									position: absolute;
									left: 110px;
									bottom: 162px;
								}
								.satc-selet {
									height: auto;
									justify-content: center;
									align-items: center;
									display: grid;
									position: absolute;
									top: 115px;
									left: 110px;
									width: auto !important;
								}
								.quant {
									position: relative;
									bottom: 0;
									height: auto;
									left: 0;
								}
								.quant .quantity {
									float: left;
								}
								.sticky-button {
									position: absolute;
									bottom: 10px;
									height: auto;
									left: 10px;
								}
								.inner .single_add_to_cart_button.button.alt, .inner .single_add_to_cart_button2.button.alt {
									margin-left: 20px;
									margin-bottom: 10px;
								}
							}
						</style>

		<?php
	}
	if (isset($satc_settings['satc_checkbox_field_53'])){
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									width: 40px;
    								margin-right: 10px;
									align-items: flex-end;
									margin-bottom: 5px;
									position: absolute;
    								top: 115px;
									left: 110px;
							}
						</style>
					<?php
				} else {
					?>
						<style>
							@media only screen and (max-width:600px){
								.satc-variation-button {
									display: none;
								}
							}
						</style>
					<?php
				}
	/*------------------------------
	 * 
	 * end mobile display slide out
	 * 
	 * ============================*/
	}
}
