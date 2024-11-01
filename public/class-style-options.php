<?php

add_action( 'wp_head', 'satc_add_css_options_in_head', 9999999 );
function satc_add_css_options_in_head()
{
    
    if ( is_product() ) {
        $satc_settings = get_option( 'satc_settings' );
        /*=======================================
         * 
         * desktop settings
         * 
         * =====================================*/
        
        if ( isset( $satc_settings['satc_checkbox_field_10'] ) ) {
            // desktop enable disable
            ?>
						<style>
							@media only screen and (min-width:800px){
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								display: block;
							}
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							@media only screen and (min-width:800px){
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								display: none !important;
							}
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_20'] ) ) {
            // mobile enable disable
            ?>
						<style>
							@media only screen and (max-width:800px){
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								display: block;
							}
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							@media only screen and (max-width:800px){
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								display: none !important;
							}
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_30'] ) ) {
            // show  hide image
            ?>
						<style>
							img.satc-fixed-cart-image {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							img.satc-fixed-cart-image {
								display: none;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_35'] ) ) {
            // show hide title
            ?>
						<style>
							.satc-product-title {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							.satc-product-title {
								display: none !important;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_40'] ) ) {
            // show hide reviews
            ?>
						<style>
							.inner .star-rating {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							.inner .star-rating {
								display: none;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_44'] ) ) {
            // show hide price
            ?>
						<style>
							.satc-price {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							.satc-price {
								display: none !important;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_47'] ) ) {
            // show hide variations
            ?>
						<style>
							.satc-selet {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							.satc-selet {
								display: none !important;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_checkbox_field_51'] ) ) {
            // show hide quantity box
            ?>
						<style>
							.quant {
								display: block;
							}
						</style>
					<?php 
        } else {
            ?>
						<style>
							.quant {
								display: none !important;
							}
							.inner .single_add_to_cart_button.button.alt, .inner .single_add_to_cart_button2.button.alt {
								margin-left:0 !important;
							}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
            //  option 2 bottom
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
									border-top:1px solid #2d2c2c
								}
							.satc-simple-fixed-bar, #satc-fixed-bar-variations, button::-moz-focus-inner {
									padding: 0;
									border: 0;
								}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
            // option 1 top border color
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
									border-bottom:1px solid #2d2c2c;
								}
							.satc-simple-fixed-bar, #satc-fixed-bar-variations, button::-moz-focus-inner {
									padding: 0;
									border: 0;
								}
						</style>
					<?php 
        }
        
        
        if ( isset( $satc_settings['satc_text_field_95'] ) && $satc_settings['satc_text_field_95'] ) {
            // add to cart padding right
            ?>
						<style>
							.satc-fixed-add-to-cart-button,.single_add_to_cart_button2.button.alt,.sticky-button .single_add_to_cart_button.button.alt {
								padding-right: <?php 
            echo  $satc_settings['satc_text_field_95'] ;
            ?>px !important;
							}
						</style>
					<?php 
        }
        
        /*====================================================
         *
         * Position top styling
         *
         *====================================================*/
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								position:fixed;
								top:0;
								left:0;
								z-index:99999;
								width:100%;
							}
							
							.cart-contents:hover + .satc-cart {

								display: block;
								position: absolute;
								right: 50px;
								top: 110%;
								background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								transition:0.5s;
							}
							.satc-cart table tr td {
								color:<?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
							}
							.satc-cart table tr td .woocommerce-Price-amount.amount {

								font-size: inherit !important;
								font-weight: 900;

							}
							.fas.fa-arrow-up, .fas.fa-arrow-down {

								position: absolute;
								right: 0;
								bottom: -31px;
								font-size: 30px;
								background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								padding: 0 5px;
								border-left:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-bottom:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-right:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							
							.inner .fas.fa-shopping-cart {
								font-size: 30px;
								position: absolute;
								bottom: -30px;
								right: 0;
								z-index: 99999;
								color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								background: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								padding: 10px;
								border-radius: 50px;
								border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							.inner .cart-contents {
								position: absolute;
								right: -1px;
								bottom: -31px;
								z-index: 99999;
								padding: 9px 5px 18px;
								border-radius: 50px;
								color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								width: 55px;
								text-align: center;
							}						
							img.satc-fixed-cart-image {
								width: 80px !important;
								height: 80px !important;
								object-fit: cover;
								align-items: center;
							}
							#satc-fixed-bar-variations .inner {
								display: flex;
								position: relative;
								width: 90%;
								margin: auto;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
							}
							.sticky-button {
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
								float: right;
								position: absolute;
								right: 0;
							}
							.satc-product-title {
								width:calc(25% - 80px);
								min-width:300px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								/*justify-content: center;*/
								align-items: center;
								display: flex;
								margin-left:20px;
							}
	
							.satc-fixed-stars, .satc-img {
								width:100px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}
							.satc-fixed-stars {
   								height: 30px;
							    position: absolute;
							    bottom: 0;
							}
							.satc-price {
								width: calc(30% - 100px);
								min-width: 250px;
								display: flex;
								align-items: center;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
							}
							.satc-selet {
								width:15%;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}

							.quant {
								width:100px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}
							.sticky-button {
								width:calc(40% - 100px);
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: flex-end;
								align-items: center;
								display: flex;
							}
							@media only screen and (max-width:600px){
								.sticky-button {
									width:calc(40% - 100px);
								}
								.satc-variation-button {
									height: fit-content !important;
									position: absolute !important;
								    right: 0 !important;
								}
							}
							.inner {
								width:90%;
								display:flex;
								margin:auto;
								position: relative;
							}
							.satc-simple-fixed-bar .input-text {
								font-size:150%;
							}
							@media only screen and (min-width:600px) and (max-width:850px){
								.satc-price {
							  	   position: absolute;
							  	   left: 120px;
 							 	   bottom: 0;
							 	   height: auto;
								}
								.sticky-button {
								    width: calc(60% - 100px);
								}
							}
						</style>
					<?php 
            
            if ( isset( $satc_settings['satc_radio_field_220'] ) && $satc_settings['satc_radio_field_220'] == 1 ) {
                ?>
						<style>

							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								top:-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>px;
							}
							.satc-toggle-down, .satc-toggle-up {
								display:none;
							}
						</style>
<script>
jQuery(function() {
	jQuery(window).scroll(function(){
		var distanceTop = jQuery('.satc-focus-scroll-point').offset().top - jQuery(window).height() / 2;

		if  (jQuery(window).scrollTop() > distanceTop)
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').animate({'top':'0px'},300);

		else
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').stop(true).animate({'top':"-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>"},100);
	});

});
	
</script>
					<?php 
            }
        
        }
        
        /*====================================================
         *
         * Position bottom styling
         *
         *===================================================*/
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								position:fixed;
								bottom:0;
								left:0;
								z-index:99999;
								width:100%;
							}

							.cart-contents:hover + .satc-cart {
								display: block;
								position: absolute;
								right: 50px;
								bottom: 110%;
								background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								transition:0.5s;
							}
							.satc-cart table tr td {
								color:<?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								
							}
							.satc-cart table tr td .woocommerce-Price-amount.amount {
								font-size: inherit !important;
								font-weight: 900;
							}
							.fas.fa-arrow-up, .fas.fa-arrow-down {
								position: absolute;
								right: 0;
								top: -31px;
								font-size: 30px;
								background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								padding: 0 5px;
								border-left:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-top:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-right:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							.inner .fas.fa-shopping-cart {
								font-size: 30px;
								position: absolute;
								top: -30px;
								right: 0;
								z-index: 99999;
								color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								background: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								padding: 10px;
								border-radius: 50px;
								border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							.inner .cart-contents {
								position: absolute;
								right: -1px;
								top: -31px;
								z-index: 99999;
								padding: 9px 5px 18px;
								border-radius: 50px;
								color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
								width: 55px;
								text-align: center;
							}	
							img.satc-fixed-cart-image {
								width: 80px !important;
								height: 80px !important;
								object-fit: cover;
								align-items: center;
							}
							#satc-fixed-bar-variations .inner {
								display: flex;
								position: relative;
								width: 90%;
								margin: auto;
							}
							.sticky-button {
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
								float: right;
								position: absolute;
								right: 0;
							}
							.satc-product-title {
								width:calc(25% - 80px);
								min-width:300px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								/*justify-content: center;*/
								align-items: center;
								display: flex;
								margin-left:20px;
							}
	
							.satc-fixed-stars, .satc-img {
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}
							.satc-fixed-stars {
   								height: 30px;
							    position: absolute;
							    bottom: 0;
							}
							.satc-price {
								width: calc(30% - 100px);
								min-width: 250px;
								display: flex;
								align-items: center;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
							}
							.satc-selet {
								width:15%;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}
							.quant {
								width:100px;
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: center;
								align-items: center;
								display: flex;
							}
							.sticky-button {
								width:calc(40% - 100px);
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
								justify-content: flex-end;
								align-items: center;
								display: flex;
							}
							@media only screen and (max-width:600px){
								.sticky-button {
									width:calc(40% - 100px);
								}
							}
							.inner {
								width:90%;
								display:flex;
								margin:auto;
								position: relative;
							}
							.satc-simple-fixed-bar .input-text {
								font-size:150%;
							}
						</style>
					<?php 
            
            if ( isset( $satc_settings['satc_radio_field_220'] ) && $satc_settings['satc_radio_field_220'] == 1 ) {
                ?>
						<style>

							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								bottom:-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>px;
							}
							.satc-toggle-down, .satc-toggle-up {
								display:none;
							}
						</style>
<script>
jQuery(function() {
	jQuery(window).scroll(function(){
		var distanceTop = jQuery('.satc-focus-scroll-point').offset().top - jQuery(window).height() / 2;

		if  (jQuery(window).scrollTop() > distanceTop)
			jQuery('.satc-simple-fixed-bar').animate({'bottom':'0px'},300);

		else
			jQuery('.satc-simple-fixed-bar').stop(true).animate({'bottom':"-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>"},100);
	});

});
	
</script>
<script>
jQuery(function() {
	jQuery(window).scroll(function(){
		var distanceTop = jQuery('.satc-focus-scroll-point').offset().top - jQuery(window).height() / 2;

		if  (jQuery(window).scrollTop() > distanceTop)
			jQuery('#satc-fixed-bar-variations').animate({'bottom':'0px'},300);

		else
			jQuery('#satc-fixed-bar-variations').stop(true).animate({'bottom':"-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>"},100);
	});

});
	
</script>

					<?php 
            }
        
        }
        
        /*===========================================================
         *
         * slide in styling
         *
         *=========================================================*/
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								position:fixed;
								bottom:10%;
								right:-530px;
								width:500px;
								height:300px !important;
								z-index:99999;
								border-top:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-bottom:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-left:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							@media only screen and (max-width:450px){
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
							    background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
							    border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								transition:0.5s;
								z-index:99;
							}
							.satc-cart table tr td {
								color:<?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
								font-size:inherit !important;
							}
							.satc-cart table tr td .woocommerce-Price-amount.amount {
							    font-size: inherit !important;
							    font-weight: 900;
							}
							.fas.fa-arrow-up, .fas.fa-arrow-down {

							    position: absolute;
							    left: -34px;
								bottom: 3px;
							    font-size: 30px;
							    background-color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
							    color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
							    padding: 0 5px;
								border-left:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-top:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								border-right:1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
								transform: rotate(270deg);
							}
							.inner .fas.fa-shopping-cart {
							    font-size: 30px;
							    position: absolute;
							    top: -25px;
								left: -54px;
							    z-index: 99999;
							    color: <?php 
            echo  $satc_settings['satc_text_field_156'] ;
            ?>;
							    background: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
							    padding: 10px;
							    border-radius: 50px;
							    border: 1px solid <?php 
            echo  $satc_settings['satc_text_field_70'] ;
            ?>;
							}
							.inner .cart-contents {
							    position: absolute;
							    left: -54px;
								top: -26px;
 							   z-index: 99999;
							    padding: 9px 5px 18px;
							    border-radius: 50px;
							    color: <?php 
            echo  $satc_settings['satc_text_field_60'] ;
            ?>;
							    width: 55px;
							    text-align: center;
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
							    top: 130px;
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

						</style>
<?php 
            if ( isset( $satc_settings['satc_radio_field_220'] ) && $satc_settings['satc_radio_field_220'] == 2 ) {
                ?>
					
						<script>
							   jQuery(document).ready(function () {
							            var slide = function () {
 							               jQuery(".satc-simple-fixed-bar").animate({ right: '0px' });
 							           }
  							          window.setTimeout(slide, 5000);
							        });

						</script>
						<script>
					  
					       jQuery(document).ready(function () {
 							    var slide = function () {
							      jQuery("#satc-fixed-bar-variations").animate({ right: '0px' });
								}
							    window.setTimeout(slide, 5000);
							});
						</script>
					<?php 
            }
            if ( isset( $satc_settings['satc_radio_field_220'] ) && $satc_settings['satc_radio_field_220'] == 1 ) {
                ?>
						<style>

							.satc-simple-fixed-bar, #satc-fixed-bar-variations {
								right:-500px;
							}
							.satc-toggle-down, .satc-toggle-up {
								display:none;
							}
						</style>
<script>
jQuery(function() {
	jQuery(window).scroll(function(){
		var distanceTop = jQuery('.satc-focus-scroll-point').offset().top - jQuery(window).height() / 2;

		if  (jQuery(window).scrollTop() > distanceTop)
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').animate({'right':'0px'},300);

		else
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').stop(true).animate({'right':'-500px'},100);
	});

});
</script>
<script>
jQuery(function() {
	if (jQuery(window).width() <= 600) {
	jQuery(window).scroll(function(){
		
		var distanceTop = jQuery('.satc-focus-scroll-point').offset().top - jQuery(window).height() / 2;

		if  (jQuery(window).scrollTop() > distanceTop)
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').animate({'right':'0px'},300);

		else
			jQuery('.satc-simple-fixed-bar, #satc-fixed-bar-variations').stop(true).animate({'right':'-280px'},100);
	});
	}
});
</script>
					<?php 
            }
        }
        
        
        if ( isset( $satc_settings['satc_text_field_200'] ) && $satc_settings['satc_text_field_200'] ) {
            ?>
						<style>
							.satc-simple-fixed-bar, #satc-fixed-bar-variations,.inner {
								height: <?php 
            echo  $satc_settings['satc_text_field_200'] ;
            ?>px;
							}
						</style>
						<script>
							jQuery(window).load(function() {
							jQuery('.inner .input-text.qty.text').height(jQuery('.inner .single_add_to_cart_button2.button.alt').height()); 
							});	
						</script>
					<?php 
        }
        
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
            
            if ( isset( $satc_settings['satc_checkbox_field_49'] ) ) {
                ?>
							<style>
								a.satc-scroll-to {									
									color: #fff;
									background-image: linear-gradient(#ff0000, #ff0000);
									font-size: 18px;
								}
								.satc-variation-button {
									height: <?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>px;
									align-items: center;
									display: flex;
								}
								@media only screen and (min-width:600px ) and (max-width: 1180px){
									.satc-variation-button {
   										 height: fit-content;
   										 align-items: initial;
    									 display: block;
    									 position: absolute;
   									     right: 80px;
									     bottom: 0;
									 }
								}
							</style>
						<?php 
            }
        
        }
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
            
            if ( isset( $satc_settings['satc_checkbox_field_49'] ) ) {
                ?>
							<style>
								a.satc-scroll-to {									
									color: #fff;
									background-image: linear-gradient(#ff0000, #ff0000);
									font-size: 18px;
								}
								.satc-variation-button {
									height: <?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>px;	
									align-items: center;
									display: flex;
								}
								@media only screen and (min-width:600px ) and (max-width: 1180px){
									.satc-variation-button {
   										 height: fit-content;
   										 align-items: initial;
    									 display: block;
    									 position: absolute;
   									     right: 80px;
									 }
								}
							</style>
						<?php 
            }
        
        }
        if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
            if ( isset( $satc_settings['satc_checkbox_field_49'] ) ) {
                ?>
							<style>
								a.satc-scroll-to {									
									color: #fff;
									background-image: linear-gradient(#ff0000, #ff0000);
									font-size: 18px;
								}
								.satc-variation-button {
   									 position: absolute;
   									 bottom: 100px;
								}
							</style>
						<?php 
            }
        }
    }

}
