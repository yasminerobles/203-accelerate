<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush, featuring custom post types, custom queries, and custom fields.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script>
  (function(w, d, t, h, s, n) {
    w.FlodeskObject = n;
    var fn = function() {
      (w[n].q = w[n].q || []).push(arguments);
    };
    w[n] = w[n] || fn;
    var f = d.getElementsByTagName(t)[0];
    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
    var sm = d.createElement(t);
    sm.async = true;
    sm.type = 'module';
    sm.src = h + s + '.mjs' + v;
    f.parentNode.insertBefore(sm, f);
    var sn = d.createElement(t);
    sn.async = true;
    sn.noModule = true;
    sn.src = h + s + '.js' + v;
    f.parentNode.insertBefore(sn, f);
  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="container">
		<div class="page-header clearfix">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<span class="title"><?php bloginfo('name'); ?></span>
			</a>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="main" class="site-main clearfix">
