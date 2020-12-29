<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package xyz
*/

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'xyz' ); ?></a>



<header class="">
<nav class="navbar navbar-expand-lg">
<div class="container">
<a class="navbar-brand" href="index.html"><h2>



<!-- <div class="site-branding"> -->
<?php
// the_custom_logo();
if ( is_front_page() && is_home() ) :
	?>
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php
	else :
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
	endif;
	$abc_blog_php_description = get_bloginfo( 'description', 'display' );
	if ( $abc_blog_php_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo $abc_blog_php_description; ?></p>
		<?php endif; ?>
		<!-- </div> -->
		
		
		
		
		
		
		<em>.</em></h2></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<!-- <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		<a class="nav-link" href="index.html">Home
		<span class="sr-only">(current)</span>
		</a>
		</li> 
		<li class="nav-item">
		<a class="nav-link" href="about.html">About Us</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="blog.html">Blog Entries</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="post-details.html">Post Details</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="contact.html">Contact Us</a>
		</li>
		</ul>
		</div> -->
		<?php
		
		wp_nav_menu( array(
			'menu'              => "menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
			'menu_class'        => "navbar-nav ml-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
			'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
			'container'         => "container", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			'container_class'   => "container", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
			// 'container_id'      => "", // (string) The ID that is applied to the container.
			//'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
			// 'before'            => "", // (string) Text before the link markup.
			// 'after'             => "", // (string) Text after the link markup.
			// 'link_before'       => "", // (string) Text before the link text.
			// 'link_after'        => "", // (string) Text after the link text.
			//'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
			// 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
			// 'walker'            => "", // (object) Instance of a custom walker class.
			// 'theme_location'    => "", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
			//'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
			// 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			) );
			
			
			?>
			
			</div>
			</nav>
			</header>
			