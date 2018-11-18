<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package comedian
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
<nav class="navbar navbar-inverse navbar-fixed-left">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--            <a class="navbar-brand" href="#">Project name</a>-->
        </div>

        <div id="navbar" class="navbar-collapse collapse">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header_menu',
				'menu_class'     => 'nav navbar-nav',
				'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
				'walker'         => new WP_Bootstrap_Navwalker(),
			) );
			?>

            <div class="social-icon">
                <ul class="social-network social-circle list-unstyled list-inline">
                    <li><a href="<?php echo get_theme_mod('comedian_socail_setting_facebook', '#') ?>" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook circle-icon"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('comedian_socail_setting_instagram', '#') ?>" target="_blank" class="instagram" title="Instagram"><i class="fa fa-instagram circle-icon"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('comedian_socail_setting_twitter', '#') ?>" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter circle-icon"></i></a></li>
                    <li><a href="<?php echo get_theme_mod('comedian_socail_setting_youtube', '#') ?>" target="_blank" class="youtube" title="Youtube"><i class="fa fa-youtube circle-icon"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


