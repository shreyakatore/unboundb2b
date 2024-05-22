<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package informationTechnology
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'informationtechnology' ); ?></a>

	<header id="masthead" class="site-header" style="display:flex;">
		<!-- .site-branding --><div class="site-branding">
            <?php
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
                <?php
            }

            $informationtechnology_description = get_bloginfo( 'description', 'display' );
            if ( $informationtechnology_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $informationtechnology_description; ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation navbar">
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'informationtechnology' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			   <div class="rightNav">
                    <input type="text" name="search" id="search" placeholder="Search">
                    <button class="btn search-btn" id="search-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-sm btn-signIn">SignIn</button>
                </div>
		</nav>
	</header><!-- #masthead -->
