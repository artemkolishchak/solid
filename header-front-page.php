<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solid
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
    		<div class="navbar-header">
      		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          		    <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'solid' ); ?></span>
          		    <span class="icon-bar"></span>
          		    <span class="icon-bar"></span>
          		    <span class="icon-bar"></span>
        		</button>

                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

            </div><!-- .navbar-header -->
    		<div class="navbar-collapse collapse navbar-right">

                <?php 
                $args = array( 
                  'theme_location'  => 'header-menu',
                  'container'       => false,
                  'menu_class'      => 'nav navbar-nav', 
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'walker'          => new WP_Bootstrap_Navwalker(),
                ); 

                wp_nav_menu($args); ?>

    		</div><!-- .nav-collapse -->
        </div><!-- .container -->
	</div><!-- .navbar .navbar-default .navbar-fixed-top -->

	
