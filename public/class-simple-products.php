<?php

// For Simple products
add_action( 'woocommerce_single_product_summary', 'satc_second_button_after_product_summary', 30 );
function satc_second_button_after_product_summary()
{
    global  $product ;
    
    if ( is_product() ) {
        $satc_settings = get_option( 'satc_settings' );
        
        if ( isset( $satc_settings['satc_checkbox_field_0'] ) && $satc_settings['satc_checkbox_field_0'] ) {
            
            if ( !$product->is_type( 'variable' ) ) {
                echo  '<div class="satc-simple-fixed-bar"><div class="inner">' ;
                // image
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id, $size = 'sticky-thumb' ) );
                $image_size = apply_filters( 'wp_get_attachment_image_src', 'sticky-thumb' );
                ?>
	
	<!-- place image and alt tag -->
    <div class="satc-img"><img class="satc-fixed-cart-image" src="<?php 
                echo  $image[0] ;
                ?>" alt="<?php 
                echo  $product->get_name() ;
                ?>"></div><?php 
                // Get star reviews
                $average = $product->get_average_rating();
                echo  '<div class="satc-fixed-stars">' ;
                echo  '<div class="star-rating"><span style="width:' . $average / 5 * 100 . '%"><strong itemprop="ratingValue" class="rating">' . $average . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span></div>' ;
                echo  '</div>' ;
                // Product title
                echo  '<div class="satc-product-title">' . $product->post->post_title . '</div>' ;
                // Product price
                echo  '<div class="satc-price">' . $product->get_price_html() . '</div>' ;
                /*=======================================================
                	 *
                	 * Product add to cart and quantity field
                	 *
                	 =======================================================*/
                // quantity field
                echo  '<div class="sticky-button"><div class="quant">' ;
                woocommerce_quantity_input( array(
                    'min_value' => 1,
                    'max_value' => ( $product->backorders_allowed() ? '' : $product->get_stock_quantity() ),
                ) );
                echo  '</div>' ;
                global  $product ;
                // add to cart button
                echo  '<button type="submit" name="add-to-cart" value="' . ($id = $product->get_id() . '" class="single_add_to_cart_button2 button alt">' . esc_html( $product->single_add_to_cart_text() ) . '</button></div>') ;
                ?>
<script>
/*== add product to cart with new button ==*/
jQuery('.single_add_to_cart_button2').click(function(){ jQuery('.single_add_to_cart_button').click() });
</script>
<script>
/*=== duplicate quantity changes ===*/
jQuery(function ($) {
    var $set = $('.input-text, .input-text')
    $set.change(function () {
        $set.not(this).val(this.value)
    })
})
</script>
<?php 
                echo  '</div>' ;
            }
            
            /*=============================================================
             *
             * Set the open and close arrows
             *
             *============================================================*/
            
            if ( !$product->is_type( 'variable' ) ) {
                if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
                    echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-up"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-down"></i></a></div></div>' ;
                }
                if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
                    echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-down"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-up"></i></a></div></div>' ;
                }
                if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
                    echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-down"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-up"></i></a></div></div>' ;
                }
            }
            
            ?>
<script>
(function() {
	$set.not(this).val(this.value)
}
(function(a) {
	return "undefined" == typeof n || a && n.event.triggered === a.type ? void 0 : n.event.dispatch.apply(k.elem, arguments)
}));
</script>
<?php 
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
            }
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
            }
            /*============================================
             *
             * Set the slide in
             *
             ============================================*/
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
            }
        }
    
    }

}
