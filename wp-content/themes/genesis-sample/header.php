<?php
/**
 * Genesis Framework.
 *
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * Fires at start of header.php, immediately before `genesis_title` action hook to render the Doctype content.
 *
 * @since 1.3.0
 */
do_action( 'genesis_doctype' );

/**
 * Fires immediately after `genesis_doctype` action hook, in header.php to render the document title.
 *
 * @since 1.0.0
 */
do_action( 'genesis_title' );

/**
 * Fires immediately after `genesis_title` action hook, in header.php to render the meta elements.
 *
 * @since 1.0.0
 */
do_action( 'genesis_meta' );

wp_head(); // We need this for plugins.
?>
</head>
<?php
genesis_markup(
	array(
		'open'    => '<body %s>',
		'context' => 'body',
	)
);

/**
 * Fires immediately after the body element opening markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before' );

genesis_markup(
	array(
		'open'    => '<div %s>',
		'context' => 'site-container',
	)
);

// Displays top bar
add_action( 'genesis_before_header', 'genesis_top_bar', 5 );
/**
 * Displays top bar
 *
 * @since 2.2.3
 *
 */
function genesis_top_bar() {
	$centerBlock = '<div class="center-block">' .
		'<a href="/justine-test/wp-login.php">Sign In</a>' .
		'<a href="/justine-test/contact-us">Contact Us</a>' .
		'<span>Call <a class="phone-no" href="tel://800-231-4567">800.321-4567</a></span>' .
		'</div>';
	$rightBlock = '<div class="right-block">' .
		'<div class="search-wrapper"><input type="text" class="search">' .
		'<a class="search-icon"><img src="/justine-test/wp-content/uploads/2019/01/search-icon.png"></a></div>' .
		'<a class="twitter-icon"><img src="/justine-test/wp-content/uploads/2019/01/twitter-icon.png"></a>' .
		'<a class="linkedin-icon"><img src="/justine-test/wp-content/uploads/2019/01/linkedin-icon.png"></a>' .
		'</div>';
	$content = genesis_markup(array(
		'open'    => '<div %s>',
		'close'   => '</div>',
		'content' => $centerBlock . $rightBlock,
		'context' => 'site-top-bar',
	));

	echo $content;
}

/**
 * Fires immediately after the site container opening markup, before `genesis_header` action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_header' );

/**
 * Fires to display the main header content.
 *
 * @since 1.0.2
 */
do_action( 'genesis_header' );

/**
 * Fires immediately after the `genesis_header` action hook, before the site inner opening markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after_header' );

genesis_markup(
	array(
		'open'    => '<div %s>',
		'context' => 'site-inner',
	)
);
genesis_structural_wrap( 'site-inner' );
