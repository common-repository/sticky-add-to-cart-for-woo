<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       wizplugins.com
 * @since      1.0.0
 *
 * @package    Satcwoo
 * @subpackage Satcwoo/admin
 */
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Satcwoo
 * @subpackage Satcwoo/admin
 * @author     Wiz Plugins <hello@wizplugins.com>
 */
class Satcwoo_Admin
{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $satcwoo    The ID of this plugin.
     */
    private  $satcwoo ;
    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private  $version ;
    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $satcwoo       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $satcwoo, $version )
    {
        $this->satcwoo = $satcwoo;
        $this->version = $version;
    }
    
    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles( $hook )
    {
        if ( 'woocommerce_page_sticky_add_to_cart_for_woo' != $hook ) {
            return;
        }
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Satcwoo_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Satcwoo_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style(
            $this->satcwoo,
            plugin_dir_url( __FILE__ ) . 'css/satcwoo-admin.css',
            array(),
            $this->version,
            'all'
        );
    }
    
    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts( $hook )
    {
        if ( 'woocommerce_page_sticky_add_to_cart_for_woo' != $hook ) {
            return;
        }
        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Satcwoo_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Satcwoo_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script(
            $this->satcwoo,
            plugin_dir_url( __FILE__ ) . 'js/satcwoo-admin.js',
            array( 'wp-color-picker' ),
            false,
            true
        );
    }

}
add_action( 'admin_menu', 'satc_add_admin_menu', 67 );
add_action( 'admin_init', 'satc_settings_init' );
add_theme_support( 'post-thumbnails' );
add_image_size(
    'sticky-thumb',
    80,
    80,
    true
);
function satc_add_admin_menu()
{
    /*add_options_page( 'Sticky add to cart for woo', 'Sticky add to cart for woo', 'manage_options', 'sticky_add_to_cart_for_woo', 'satc_options_page' );*/
    add_submenu_page(
        'woocommerce',
        'Sticky add to cart for woo',
        'Sticky add to cart for woo',
        'manage_options',
        'sticky_add_to_cart_for_woo',
        'satc_options_page'
    );
}

function satc_settings_init()
{
    register_setting( 'satcPluginPage', 'satc_settings' );
    add_settings_section(
        'satc_satcPluginPage_section',
        __( '', 'wordpress' ),
        'satc_settings_section_callback',
        'satcPluginPage'
    );
    add_settings_field(
        'satc_checkbox_field_0',
        __( 'Enable sticky bar', 'wordpress' ),
        'satc_checkbox_field_0_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_10',
        __( 'Enable desktop', 'wordpress' ),
        'satc_checkbox_field_10_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_20',
        __( 'Enable mobile', 'wordpress' ),
        'satc_checkbox_field_20_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_30',
        __( 'Show product image', 'wordpress' ),
        'satc_checkbox_field_30_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_35',
        __( 'Show product title', 'wordpress' ),
        'satc_checkbox_field_35_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_40',
        __( 'Show review stars', 'wordpress' ),
        'satc_checkbox_field_40_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_44',
        __( 'Show price', 'wordpress' ),
        'satc_checkbox_field_44_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_47',
        __( 'Show variation dropdown select', 'wordpress' ),
        'satc_checkbox_field_47_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_49',
        __( 'Show select options button instead of selectors', 'wordpress' ),
        'satc_checkbox_field_49_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_checkbox_field_51',
        __( 'Show quantity box', 'wordpress' ),
        'satc_checkbox_field_51_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_select_field_190',
        __( 'Sticky position', 'wordpress' ),
        'satc_select_field_190_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_text_field_200',
        __( 'Sticky bar height', 'wordpress' ),
        'satc_text_field_200_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
    add_settings_field(
        'satc_radio_field_220',
        __( 'Sticky bar behaviour', 'wordpress' ),
        'satc_radio_field_220_render',
        'satcPluginPage',
        'satc_satcPluginPage_section'
    );
}

function satc_checkbox_field_0_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label class="switch"><input type='checkbox' name="satc_settings[satc_checkbox_field_0]" <?php 
    checked( $options['satc_checkbox_field_0'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_10_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_10]' <?php 
    checked( $options['satc_checkbox_field_10'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_20_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_20]' <?php 
    checked( $options['satc_checkbox_field_20'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_30_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_30]' <?php 
    checked( $options['satc_checkbox_field_30'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_32]' <?php 
    checked( $options['satc_checkbox_field_32'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_35_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_35]' <?php 
    checked( $options['satc_checkbox_field_35'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_37]' <?php 
    checked( $options['satc_checkbox_field_37'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:20px;">Adjust Product font size for mobile<input type="number" id="field10" min="4" max="50" name='satc_settings[satc_text_field_38]' value='<?php 
    echo  $options['satc_text_field_38'] ;
    ?>'>
	<?php 
}

function satc_checkbox_field_40_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_40]' <?php 
    checked( $options['satc_checkbox_field_40'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_42]' <?php 
    checked( $options['satc_checkbox_field_42'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_44_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_44]' <?php 
    checked( $options['satc_checkbox_field_44'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_45]' <?php 
    checked( $options['satc_checkbox_field_45'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:20px;">Adjust price font size for mobile<input type="number" id="field11" min="4" max="50" name='satc_settings[satc_text_field_46]' value='<?php 
    echo  $options['satc_text_field_46'] ;
    ?>'>
	<?php 
}

function satc_checkbox_field_47_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_47]' <?php 
    checked( $options['satc_checkbox_field_47'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_48]' <?php 
    checked( $options['satc_checkbox_field_48'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_49_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_49]' <?php 
    checked( $options['satc_checkbox_field_49'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_53]' <?php 
    checked( $options['satc_checkbox_field_53'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_checkbox_field_51_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label style="margin-right:10px;">Desktop</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_51]' <?php 
    checked( $options['satc_checkbox_field_51'], 1 );
    ?> value='1'><span class="slider round"></span></label><label style="margin-left:30px;margin-right:10px;">Mobile</label><label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_52]' <?php 
    checked( $options['satc_checkbox_field_52'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_select_field_190_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<select name='satc_settings[satc_select_field_190]'>
		<option value='1' <?php 
    selected( $options['satc_select_field_190'], 1 );
    ?>>Top</option>
		<option value='2' <?php 
    selected( $options['satc_select_field_190'], 2 );
    ?>>Bottom</option>
		<option value='3' <?php 
    selected( $options['satc_select_field_190'], 3 );
    ?>>Side</option>
	</select>

<?php 
}

function satc_text_field_200_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<input class="inputRange5" type="range" min="80" max="300" name="satc_settings[satc_text_field_200]" value="<?php 
    echo  $options["satc_text_field_200"] ;
    ?>" />
	<input type='number' id="field5" min="80" max="300" name='satc_settings[satc_text_field_200]' value='<?php 
    echo  $options['satc_text_field_200'] ;
    ?>'><label>Only for top and bottom position. Recommended value 100px to 150px</label>
<script>
var input = document.getElementById('field5');
if(input.value.length == 0)
    input.value = "130";
var range5 = document.querySelector('.inputRange5');
var field5 = document.getElementById('field5');

range5.addEventListener('input', function (e) {
 field5.value = e.target.value;
});
field5.addEventListener('input', function (e) {
range5.value = e.target.value;
});
</script>
	<?php 
}

function satc_checkbox_field_215_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<label class="switch"><input type='checkbox' name='satc_settings[satc_checkbox_field_215]' <?php 
    checked( $options['satc_checkbox_field_215'], 1 );
    ?> value='1'><span class="slider round"></span></label>
	<?php 
}

function satc_radio_field_220_render()
{
    $options = get_option( 'satc_settings' );
    ?>
	<input type='radio' id='satc-radio_1' name='satc_settings[satc_radio_field_220]' <?php 
    checked( $options['satc_radio_field_220'], 1 );
    ?> value='1'><label>Slide in</label><br><?php 
    if ( satcfw_fs()->is_not_paying() ) {
        ?><script>jQuery("#satc-radio_1").prop("checked", true);</script> <?php 
    }
    ?>
	<?php 
}

function satc_settings_section_callback()
{
    
    if ( satcfw_fs()->is_not_paying() ) {
        echo  '<section><h1>' . __( 'Awesome Premium Features', 'sticky-add-to-cart-for-woo' ) . '</h1>' ;
        echo  '<h3>Unleash powerful features and make this your own unique shopping experience</h3>' ;
        echo  '<ul style="list-style-type: square;padding-left:20px;">' ;
        echo  '<li>Edit the appearance of the sticky bar' ;
        echo  '<ul style="list-style-type: circle;padding-left:20px;"> <li>Change bar color</li>' ;
        echo  '		<li>Change button color</li>' ;
        echo  '		<li>Change button padding</li>' ;
        echo  '		<li>Change font size and color</li>' ;
        echo  '		<li>Change the image border radius for a unique look</li></ul></li>' ;
        echo  '<li>Ajax add to cart or custom redirect</li>' ;
        echo  '<li>Automatic slide in after scroll or toggle the appearance</li>' ;
        echo  '</ul>' ;
        echo  '<b><a style="font-size:1.3em;" href="' . satcfw_fs()->get_upgrade_url() . '">' . __( 'Upgrade Now!', 'sticky-add-to-cart-for-woo' ) . '</a></b>' ;
        echo  '<b>Remember to deactivate the free version before activating the pro version</b>' ;
        echo  '
    </section>' ;
    }
    
    echo  __( '<br>Select the layout and appearance of the sticky bar', 'wordpress' ) ;
}

function satc_options_page()
{
    ?>
	<form action='options.php' method='post'>

		<h2>sticky add to cart for woo</h2>

		<?php 
    settings_fields( 'satcPluginPage' );
    do_settings_sections( 'satcPluginPage' );
    submit_button();
    ?>

	</form>
	<?php 
}
