(function( $ ) {
	'use strict';
$('select').addClass("custom_class");
	
	
	/*============================
	 * 
	 * show after point
	 * 
	 * ============================*/
					 
					   
	
	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
jQuery('span.count').contents().filter(function() {
    return this.nodeType == 3
}).each(function(){
    this.textContent = this.textContent.replace('items','');
});
    
/*=======================
 * add class when button clicked
 * ======================*/
	jQuery(document).ready(function(){
  jQuery("button.single_add_to_cart_button2").click(function(){
    jQuery(".single_add_to_cart_button2").addClass("added");
  });
});
	
/*============================
 * change add to cart text
 * =========================*/
	jQuery(document).ready(function () {
    jQuery(".sticky-button").click(function () {
        jQuery(".single_add_to_cart_button2").fadeOut(function () {
            jQuery(".single_add_to_cart_button2").text((jQuery(".single_add_to_cart_button2").text() == 'Add to cart') ? 'Added! View Cart' : 'Add to cart').fadeIn();
        })
    })
});

})( jQuery );
