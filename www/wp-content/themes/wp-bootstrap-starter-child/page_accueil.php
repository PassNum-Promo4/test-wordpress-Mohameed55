<?php
/**
 * Template Name: Blank with Container
 */

?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_header_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => '',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
			<div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'Bienvenue dans Mon portfolio';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__("Bonjour de m'apelle Naimi Mohamed Passionné par le monde de la numérique, Travailleur et volontaire, possédant une très bonne faculté dadaptation et un sens du relationnel développé, jai déjà eu loccasion de travailler sur plusieurs langages informatiques dans mon parcours scolaire et universitaire, celui-ci pourra mapporter de nouvelles compétences tout en accomplissant les tâches que vous voudrez bien me confier, jespére que cava vous plaire :) ");
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container ml-5">
                <h1 class="text-center">
					Les dernières Photographies réalisées
				</h1>
				<div class="ml-5">
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-29072015-img-1692-jpg-117041891.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-5481-jpg-121997317.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-3495-jpg-157065727.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-9322-jpg-140175187.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-03072015-img-0913-jpg-117041851.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-9347-jpg-140190927.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-9450-jpg-141798953.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-img-9501-jpg-140756969.jpg" alt="" width="300" height="121" />
					
					<img class="alignnone size-medium wp-image-26 p-1" src="http://mohamednaimi.ovh/wp-content/uploads/2018/02/stock-photo-31072015-img-1875-jpg-117041897.jpg" alt="" width="300" height="121" />
				</div>
				
            </div>
			</div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
