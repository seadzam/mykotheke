<?php
/**
 * MyKotheke functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MyKotheke
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mykotheke_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on MyKotheke, use a find and replace
		* to change 'mykotheke' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mykotheke', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mykotheke' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mykotheke_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mykotheke_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mykotheke_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mykotheke_content_width', 640 );
}
add_action( 'after_setup_theme', 'mykotheke_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mykotheke_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mykotheke' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mykotheke' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mykotheke_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mykotheke_scripts() {
	wp_enqueue_style( 'mykotheke-style', get_stylesheet_uri(), array(), time() );
	wp_style_add_data( 'mykotheke-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mykotheke-glide', get_template_directory_uri() . '/js/glide.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mykotheke_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function get_cart_count() {
    if ( WC()->cart ) {
        return WC()->cart->get_cart_contents_count();
    }
    return 0;
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'init', 'remove_woocommerce_breadcrumb' );

function remove_woocommerce_breadcrumb() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

add_filter( 'gettext', 'translate_strings', 20, 3 );
add_filter( 'ngettext', 'translate_strings', 20, 3 );

function translate_strings( $translated, $text, $domain ) {
    if ( 'woocommerce' === $domain ) {
        switch ( $text ) {
            case 'Add to cart':
                $translated = 'In den Warenkorb';
                break;
        }
    }
    return $translated;
}

add_filter( 'woocommerce_countries_allowed_countries', 'custom_allowed_countries' );

function custom_allowed_countries( $countries ) {
    $allowed_countries = array(
        'AT' => 'Österreich',
        'DE' => 'Deutschland',
        'CH' => 'Schweiz',
    );
    return $allowed_countries;
}

add_filter('woocommerce_add_to_cart_redirect', 'wc_custom_add_to_cart_redirect');
function wc_custom_add_to_cart_redirect() {
    return false;
}

add_action( 'init', 'my_child_move_legal_checkboxes', 50 );

function my_child_move_legal_checkboxes() {
    remove_action( 'woocommerce_review_order_after_payment', 'woocommerce_gzd_template_render_checkout_checkboxes', 10 );
    add_action( 'woocommerce_gzd_review_order_before_submit', 'woocommerce_gzd_template_render_checkout_checkboxes', 10 );
}

function translate_my_string( $original_string ) {
    if ( $original_string == 'I would like to receive exclusive emails with discounts and product information' ) {
        return 'Ich möchte exklusive E-Mails mit Rabatten und Produktinformationen erhalten.';
    }
    return $original_string;
}
add_filter( 'the_hypothetical_filter_hook', 'translate_my_string' );

function custom_woocommerce_email_order_details($order, $sent_to_admin, $plain_text, $email) {
    $billing_first_name = $order->get_billing_first_name();
    
    $email->heading = "Ihre MYKOTHEKE-Bestellung für $billing_first_name ist abgeschlossen";
    $email->subject = 'Ihre Rechnung und weitere Informationen zu Ihrer Bestellung';

    $email_heading = $email->get_heading();
    echo "<p>Sehr geehrte $billing_first_name,</p>";
    echo '<p>anbei die Rechnung zu Ihrer Bestellung.</p>';
    echo '<p><strong>IHR MYKOTHEKE ONLINE-BONUS</strong></p>';
    echo '<ul>';
    echo '<li>3€-Nachlass für jeden Einkauf ab 50 € (wird automatisch vom Einkaufswert abgezogen)</li>';
    echo '<li>7€-Nachlass für jeden Einkauf ab 100 € (wird automatisch vom Einkaufswert abgezogen)</li>';
    echo '<li>Kostenlose Zustellung in Österreich für jeden Einkauf ab 50€</li>';
    echo '<li>Kostenlose Zustellung in anderen EU-Ländern für jeden Einkauf ab 80€</li>';
    echo '</ul>';
    echo '<p><strong>STAMMKUNDENRABATT</strong></p>';
    echo '<p>Ab der 3. Bestellung bei Mykotheke erhalten Sie zusätzlich 5% Stammkundenrabatt und ab der 5. Bestellung 10% Stammkundenrabatt. Schicken Sie uns einfach eine E-Mail mit dem Betreff "Stammkunde" an <a href="mailto:bestellung@mykotheke.at">bestellung@mykotheke.at</a>. Wir senden Ihnen innerhalb von 2 Werktagen Ihren persönlichen Gutscheincode zu, mit dem Sie in unserem Onlineshop oder in unserem Ladengeschäft günstiger einkaufen können. Der Rabatt kann 1 Jahr lang beliebig oft eingelöst werden für:</p>';
    echo '<ul>';
    echo '<li>alle gemahlenen Pilze (Vitalpilz-Tees),</li>';
    echo '<li>Nahrungsergänzungsmittel auf der Basis von Vitalpilzen (Kapseln, Flüssigextrakte, Pulver) und</li>';
    echo '<li>Nahrungsergänzungsmittel auf der Basis von Schwarzkümmelöl.</li>';
    echo '</ul>';
    echo '<p>Herzlichen Dank für Ihren Einkauf und Ihr Vertrauen!</p>';
    echo '<p>Mit freundlichen Grüßen<br/>Ihr Mykotheke-Team</p>';
}
add_action('woocommerce_email_order_details', 'custom_woocommerce_email_order_details', 10, 4);


function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, user-agent");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, PATCH, DELETE");
    if ( 'OPTIONS' == $_SERVER['REQUEST_METHOD'] ) {
        status_header(200);
        exit();
    }
}
add_action('init', 'add_cors_http_header');

add_filter( 'rewrite_rules_array', function( $rules )
{
    $new_rules = array(
        'produkte/([^/]*?)/page/([0-9]{1,})/?$' => 'index.php?product_cat=$matches[1]&paged=$matches[2]',
        'produkte/([^/]*?)/?$' => 'index.php?product_cat=$matches[1]',
    );
    return $new_rules + $rules;
} );

function woocommerce_ajax_add_to_cart() {
    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id);

    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
        do_action('woocommerce_ajax_added_to_cart', $product_id);
        if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
            wc_add_to_cart_message(array($product_id => $quantity), true);
        }
        WC_AJAX::get_refreshed_fragments();
    } else {
        $data = array(
            'error' => true,
            'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id),
        );
        echo wp_send_json($data);
    }
    wp_die();
}

add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');

add_filter( 'woocommerce_product_post_type_link_parent_category_only', '__return_true' );

add_filter( 'woocommerce_package_rates', 'hide_flat_rate_if_free_shipping', 100, 2 );

function hide_flat_rate_if_free_shipping( $rates, $package ) {
    $free_shipping = array_filter($rates, function($rate) {
        return $rate->method_id === 'free_shipping';
    });

    if ( !empty($free_shipping) ) {
        foreach ( $rates as $rate_id => $rate ) {
            if ( 'flat_rate' === $rate->method_id ) {
                unset( $rates[ $rate_id ] );
            }
        }
    }

    return $rates;
}

add_filter( 'woocommerce_cart_shipping_method_full_label', 'change_flat_rate_shipping_label', 10, 2 );

function change_flat_rate_shipping_label( $label, $method ) {
    if ( strpos( $method->id, 'flat_rate' ) === 0 ) {
        $label = wc_price( $method->cost );
        
        if ( $method->get_shipping_tax() > 0 ) {
            $label .= ' ' . WC()->countries->inc_tax_or_vat() . ' ' . wc_price( $method->get_shipping_tax() );
        }
    }
    return $label;
}