<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>
<div class="container-fluid">
    <header class="blog-header py-3 container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col text-center text-bold">
                <a class="blog-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
        </div>
    </header>
    <div class="container-fluid border-bottom">
        <div class="nav-scroller py-1 mb-2 container">
            <!-- <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-center" href="https://novelas369.com">Home</a>
                <a class="p-2 text-center" href="https://novelas369.com/images">Images</a>
                <a class="p-2 text-center" href="https://novelas369.com/videos">Videos</a>
                <a class="p-2 text-center" href="https://novelas369.com/movies">Movies</a>
            </nav> -->
        </div>
    </div>
</div>
