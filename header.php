<?php
/**
 * The header for Saikou WordPress theme
 * 
 * @package Saikou
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Darker+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Section -->
<header class="bg-white shadow-lg sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex flex-col">
                <h1 class="text-2xl font-space-grotesk font-bold text-saikou-secondary">Saikou</h1>
                <span class="text-xs text-gray-600 font-darker-grotesque font-medium -mt-1">Made in India</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex items-center space-x-8',
                    'container' => false,
                    'link_class' => 'text-saikou-secondary hover:text-saikou-accent transition-colors font-darker-grotesque font-medium',
                ));
                ?>
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="bg-saikou-primary text-saikou-secondary px-4 py-2 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all flex items-center gap-2">
                    <span>🛒</span>
                    <span class="cart-count bg-saikou-secondary text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </span>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <button class="md:hidden text-saikou-secondary" id="mobile-menu-btn" aria-expanded="false" aria-controls="mobile-menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span class="sr-only">Toggle menu</span>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden mt-4 pb-4" id="mobile-menu" role="menu">
            <div class="flex flex-col space-y-4">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-col space-y-4',
                    'container' => false,
                    'link_class' => 'text-saikou-secondary hover:text-saikou-accent transition-colors font-darker-grotesque font-medium',
                ));
                ?>
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="bg-saikou-primary text-saikou-secondary px-4 py-2 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all flex items-center gap-2 w-fit">
                    <span>🛒</span>
                    <span class="cart-count bg-saikou-secondary text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                    </span>
                </a>
            </div>
        </div>
    </nav>
</header>