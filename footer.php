<?php
/**
 * The footer for Saikou WordPress theme
 * 
 * @package Saikou
 */
?>

<!-- Footer -->
<footer class="bg-saikou-secondary text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <div>
                <div class="mb-4">
                    <h3 class="text-xl font-space-grotesk font-bold mb-2"><?php bloginfo('name'); ?></h3>
                    <p class="text-gray-300 font-darker-grotesque"><?php bloginfo('description'); ?></p>
                </div>
            </div>
            
            <div>
                <h4 class="font-space-grotesk font-semibold mb-4">Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_quick_links',
                    'menu_class' => 'space-y-2 font-darker-grotesque',
                    'container' => false,
                    'link_class' => 'text-gray-300 hover:text-saikou-primary transition-colors',
                    'depth' => 1,
                ));
                ?>
            </div>
            
            <div>
                <h4 class="font-space-grotesk font-semibold mb-4">Collections</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_collections',
                    'menu_class' => 'space-y-2 font-darker-grotesque',
                    'container' => false,
                    'link_class' => 'text-gray-300 hover:text-saikou-primary transition-colors',
                    'depth' => 1,
                ));
                ?>
            </div>
            
            <div>
                <h4 class="font-space-grotesk font-semibold mb-4">Contact Info</h4>
                <div class="space-y-2 font-darker-grotesque text-gray-300">
                    <p>📞 <?php echo esc_html(get_theme_mod('saikou_phone', '92742 38391')); ?></p>
                    <p>📧 <a href="mailto:<?php echo esc_attr(get_theme_mod('saikou_email', 'info@saikoushop.com')); ?>" class="text-gray-300 hover:text-saikou-primary transition-colors"><?php echo esc_html(get_theme_mod('saikou_email', 'info@saikoushop.com')); ?></a></p>
                    <p>📍 <?php echo esc_html(get_theme_mod('saikou_address', 'India')); ?></p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-700 pt-8 text-center">
            <p class="text-gray-400 font-darker-grotesque">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved. Proudly made in India.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>