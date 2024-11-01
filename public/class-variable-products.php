<?php

// For Variable products
add_action( 'woocommerce_single_variation', 'satc_second_button_single_variation', 30 );
function satc_second_button_single_variation()
{
    global  $product ;
    
    if ( is_product() ) {
        $satc_settings = get_option( 'satc_settings' );
        
        if ( isset( $satc_settings['satc_checkbox_field_0'] ) && $satc_settings['satc_checkbox_field_0'] ) {
            echo  '<div id="satc-fixed-bar-variations"><div class="inner">' ;
            /*=======================================================
             *
             * Product details
             *
             *======================================================*/
            // Image
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id, $size = 'sticky-thumb' ) );
            $image_size = apply_filters( 'wp_get_attachment_image_src', 'sticky-thumb' );
            /* $attachment_ids[0] = wp_get_attachment_image_src( get_post_thumbnail_id( $product->id ), 'single-post-thumbnail' );
               $image = wp_get_attachment_image_src($attachment_ids[0], 'full' ); */
            ?>
	<!-- place image and alt tag -->
    <div class="satc-img">
		<img class="satc-fixed-cart-image" src="<?php 
            echo  $image[0] ;
            ?>" alt="<?php 
            echo  $product->get_name() ;
            ?>"></div><?php 
            // Place product title
            echo  '<div class="satc-product-title">' . $product->post->post_title . '</div>' ;
            // Star review rating
            $average = $product->get_average_rating();
            echo  '<div class="satc-fixed-stars">' ;
            echo  '<div class="star-rating"><span style="width:' . $average / 5 * 100 . '%"><strong itemprop="ratingValue" class="rating">' . $average . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span></div>' ;
            echo  '</div>' ;
            // Price
            echo  '<div class="satc-price">' . $product->get_price_html() . '</div>' ;
            //button test
            if ( isset( $satc_settings['satc_checkbox_field_49'] ) ) {
                echo  '<div class="satc-variation-button"><a class="satc-scroll-to" href="#satc-variations">Select options</a></div>' ;
            }
            /*=========================================================
             *
             * Add variation selector -harder than I thought-
             *
             *========================================================*/
            $attributes = $product->get_variation_attributes();
            $attribute_keys = array_keys( $attributes );
            ?>

<?php 
            foreach ( $attributes as $attribute_name => $options ) {
                ?><div class="satc-selet"><table class="variations" cellspacing="0"><tbody>
    <tr>
        <td class="label"><label for="<?php 
                echo  sanitize_title( $attribute_name ) ;
                ?>"><?php 
                echo  wc_attribute_label( $attribute_name ) ;
                ?></label></td>
        <td class="value">
            <?php 
                $selected = ( isset( $_REQUEST['attribute_' . sanitize_title( $attribute_name )] ) ? wc_clean( urldecode( $_REQUEST['attribute_' . sanitize_title( $attribute_name )] ) ) : $product->get_variation_default_attribute( $attribute_name ) );
                $args = array(
                    'options'   => $options,
                    'attribute' => $attribute_name,
                    'product'   => $product,
                    'selected'  => $selected,
                );
                wc_dropdown_variation_attribute_options( $args );
                echo  ( end( $attribute_keys ) === $attribute_name ? apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . __( 'Clear', 'woocommerce' ) . '</a>' ) : '' ) ;
                ?>
        </td>
</tr></tbody></table></div>
<script>
/* = add class to main variation select = */
jQuery('.conts select').addClass("<?php 
                echo  $attribute_name ;
                ?>1");
jQuery('select').addClass("<?php 
                echo  $attribute_name ;
                ?>1");
</script>
<script>
/* = change variation when either selector is changed = */
jQuery(function ($) {
    var $set = jQuery( "<?php 
                echo  strtolower( '#' . $attribute_name ) ;
                ?>, <?php 
                echo  strtolower( '#' . $attribute_name ) ;
                ?>")
    $set.change(function () {
        $set.not(this).val(this.value)
    })
})
</script>
<?php 
            }
            /*=============================
             *
             * quantity and add to cart button
             *
             *==============================*/
            // add button and quantity wrapper
            echo  '<div class="sticky-button"><div class="quant">' ;
            // quantity selector
            woocommerce_quantity_input( array(
                'min_value' => 1,
                'max_value' => ( $product->backorders_allowed() ? '' : $product->get_stock_quantity() ),
            ) );
            echo  '</div>' ;
            ?>
<script>
jQuery(function ($) {
    var $set = jQuery( "#satc_quantity, #satc_quantity")
    $set.change(function () {
        $set.not(this).val(this.value)
    })
})
</script>
<script>
	 jQuery(".quant .quantity .qty").attr("id","satc_quantity");
	 jQuery(".woocommerce-variation-add-to-cart .quantity .qty").attr("id","satc_quantity");

</script>

<?php 
            // Add to cart button
            echo  '<button type="submit" class="single_add_to_cart_button button alt">' . esc_html( $product->single_add_to_cart_text() ) . '</button></div></div>' ;
            /*=========================================================================
             *
             * Arrow open and close toggles
             *
             *========================================================================*/
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
                echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-up"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-down"></i></a></div></div>' ;
            }
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
                echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-down"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-up"></i></a></div></div>' ;
            }
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
                echo  '<div class="satc-toggle-down"><a href="javascript:void"><i class="fas fa-arrow-down"></i></a></div><div class="satc-toggle-up"><a href="javascript:void"><i style="display:none;"class="fas fa-arrow-up"></i></a></div></div>' ;
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
            /*============================================
             *
             * top position open close toggles
             *
             *=========================================*/
            
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 1 ) {
                ?>
<script>
jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-up,.fa-shopping-cart,.inner .cart-contents").hide();
});

jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-down").show();
}); 

jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-down").hide();
});

jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-up,.fa-shopping-cart,.inner .cart-contents").show();
}); 
		</script>
<script> 

jQuery(document).ready(function(){

	jQuery(".satc-toggle-down").click(function(){
  
		jQuery("#satc-fixed-bar-variations").stop().animate({ top: "-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>" });
  });
});
</script>
<script> 
jQuery(document).ready(function(){
	jQuery(".satc-toggle-up").click(function(){
		jQuery("#satc-fixed-bar-variations").stop().animate({ top: "0" });
  });
});
</script>
<?php 
            }
            
            /*=============================================================
             *
             * Bottom position arrow toggles
             *
             *=============================================================*/
            
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 2 ) {
                ?>
<script>
jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-down,.fa-shopping-cart,.inner .cart-contents").hide();
});

jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-up").show();
}); 

jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-up").hide();
});

jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-down,.fa-shopping-cart,.inner .cart-contents").show();
}); 
		</script>
<script> 

jQuery(document).ready(function(){

	jQuery(".satc-toggle-down").click(function(){
  
		jQuery("#satc-fixed-bar-variations").stop().animate({ bottom: "-<?php 
                echo  $satc_settings['satc_text_field_200'] ;
                ?>" });
  });
});
</script>
<script> 
jQuery(document).ready(function(){
	jQuery(".satc-toggle-up").click(function(){
		jQuery("#satc-fixed-bar-variations").stop().animate({ bottom: "0" });
  });
});
</script>
<?php 
            }
            
            /*===========================================================
             *
             * Slide in arrow toggles
             *
             *==========================================================*/
            if ( isset( $satc_settings['satc_select_field_190'] ) && $satc_settings['satc_select_field_190'] == 3 ) {
                ?>
<script>
jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-down,.fa-shopping-cart,.inner .cart-contents").hide();
});

jQuery(".fa-arrow-down").click(function(){
	jQuery(".fa-arrow-up").show();
}); 

jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-up").hide();
});

jQuery(".fa-arrow-up").click(function(){
	jQuery(".fa-arrow-down,.fa-shopping-cart,.inner .cart-contents").show();
}); 
		</script>
<script> 

jQuery(document).ready(function(){

	jQuery(".satc-toggle-down").click(function(){
  
		jQuery("#satc-fixed-bar-variations").stop().animate({ right: "-500" });
  });
});
</script>
<script>
jQuery(window).resize(function(){

    if (jQuery(window).width() <= 600) {  

        jQuery(".satc-toggle-down").click(function(){
  
    jQuery("#satc-fixed-bar-variations").stop().animate({ right: "-280" });
  });

       }     

});
</script>
<script> 
jQuery(document).ready(function(){
	jQuery(".satc-toggle-up").click(function(){
		jQuery("#satc-fixed-bar-variations").stop().animate({ right: "0" });
  });
});
</script>
<script>
var $ins = $('.qty, .qty').keyup(function() {
  $ins.not(this).val(this.value);
})
</script>
<?php 
            }
        }
    
    }

}

/*==========================================
 * 
 * Add a div for the scroll to section
 * 
 * ========================================*/
add_action( 'woocommerce_before_variations_form', 'satc_scroll_to_div', 5 );
function satc_scroll_to_div()
{
    $satc_settings = get_option( 'satc_settings' );
    if ( is_product() ) {
        if ( isset( $satc_settings['satc_checkbox_field_49'] ) ) {
            echo  '<div id="satc-variations"></div>' ;
        }
    }
}
