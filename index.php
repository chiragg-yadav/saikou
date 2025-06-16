<?php
/**
 * The main template file for Saikou WordPress theme
 * 
 * @package Saikou
 */

get_header(); ?>

<!-- Hero Slideshow Section -->
<section class="hero-slideshow">
    <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="slide active">
            <div class="slide-content">
                <div class="container mx-auto px-4 py-16">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h1 class="text-4xl lg:text-6xl font-space-grotesk font-bold text-saikou-secondary mb-6">
                                <?php echo esc_html(get_theme_mod('saikou_hero_slide1_title', 'Sculpted with Love. And Way Too Much Time.')); ?>
                            </h1>
                            <p class="text-lg text-gray-600 font-darker-grotesque mb-8">
                                <?php echo esc_html(get_theme_mod('saikou_hero_slide1_desc', 'Premium collectible action figures inspired by anime, superheroes, gaming legends, and mythical icons. Proudly designed and crafted in India.')); ?>
                            </p>
                            <div class="flex gap-4">
                                <a href="<?php echo esc_url(get_theme_mod('saikou_hero_slide1_btn1_url', '#collections')); ?>" class="bg-saikou-primary text-saikou-secondary px-8 py-4 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all">
                                    <?php echo esc_html(get_theme_mod('saikou_hero_slide1_btn1_text', 'Explore Collections')); ?>
                                </a>
                                <a href="<?php echo esc_url(get_theme_mod('saikou_hero_slide1_btn2_url', '#products')); ?>" class="border-2 border-saikou-primary text-saikou-secondary px-8 py-4 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-primary transition-all">
                                    <?php echo esc_html(get_theme_mod('saikou_hero_slide1_btn2_text', 'New Arrivals')); ?>
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="<?php echo esc_url(get_theme_mod('saikou_hero_slide1_image', get_template_directory_uri() . '/assets/3c35d07e-c58f-4fb2-8ba1-7aa5ed88a07f.png')); ?>" alt="<?php echo esc_attr(get_theme_mod('saikou_hero_slide1_alt', 'Superman Premium Action Figure')); ?>" class="w-full max-w-md mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="slide">
            <div class="slide-content">
                <div class="container mx-auto px-4 py-16">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h1 class="text-4xl lg:text-6xl font-space-grotesk font-bold text-saikou-secondary mb-6">
                                <?php echo esc_html(get_theme_mod('saikou_hero_slide2_title', 'Hulk Smash Collection')); ?>
                            </h1>
                            <p class="text-lg text-gray-600 font-darker-grotesque mb-8">
                                <?php echo esc_html(get_theme_mod('saikou_hero_slide2_desc', 'Unleash the power with our exclusive Hulk collection. Built for collectors who demand the extraordinary.')); ?>
                            </p>
                            <div class="flex gap-4">
                                <a href="<?php echo esc_url(get_theme_mod('saikou_hero_slide2_btn1_url', '/product/2')); ?>" class="bg-saikou-primary text-saikou-secondary px-8 py-4 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all">
                                    <?php echo esc_html(get_theme_mod('saikou_hero_slide2_btn1_text', 'Shop Now')); ?>
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="<?php echo esc_url(get_theme_mod('saikou_hero_slide2_image', get_template_directory_uri() . '/assets/8940d71d-abcb-4bb1-898b-4e5efeb18613.png')); ?>" alt="<?php echo esc_attr(get_theme_mod('saikou_hero_slide2_alt', 'Hulk Patreon Edition')); ?>" class="w-full max-w-md mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation dots -->
        <div class="slideshow-nav">
            <button class="nav-dot active" data-slide="1"></button>
            <button class="nav-dot" data-slide="2"></button>
        </div>
        
        <!-- Navigation arrows -->
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-saikou-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🇮🇳</span>
                </div>
                <h3 class="text-xl font-space-grotesk font-semibold text-saikou-secondary mb-2"><?php echo esc_html(get_theme_mod('saikou_features_1_title', 'Made Here. Not Meh.')); ?></h3>
                <p class="text-gray-600 font-darker-grotesque"><?php echo esc_html(get_theme_mod('saikou_features_1_desc', 'Proudly made in India with global-quality standards')); ?></p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-saikou-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">✨</span>
                </div>
                <h3 class="text-xl font-space-grotesk font-semibold text-saikou-secondary mb-2"><?php echo esc_html(get_theme_mod('saikou_features_2_title', 'Details So Good, It\'s Rude.')); ?></h3>
                <p class="text-gray-600 font-darker-grotesque"><?php echo esc_html(get_theme_mod('saikou_features_2_desc', 'From facial expressions to fabric folds, we obsess over every pixel')); ?></p>
            </div>
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-saikou-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🏆</span>
                </div>
                <h3 class="text-xl font-space-grotesk font-semibold text-saikou-secondary mb-2"><?php echo esc_html(get_theme_mod('saikou_features_3_title', 'For Collectors, Not Kids.')); ?></h3>
                <p class="text-gray-600 font-darker-grotesque"><?php echo esc_html(get_theme_mod('saikou_features_3_desc', 'Display-worthy, conversation-starting collectibles')); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Collections Section -->
<section id="collections" class="py-16 bg-saikou-background">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-space-grotesk font-bold text-center text-saikou-secondary mb-12"><?php echo esc_html(get_theme_mod('saikou_collections_title', 'Our Collections')); ?></h2>
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <h3 class="text-2xl font-space-grotesk font-bold text-saikou-secondary mb-4"><?php echo esc_html(get_theme_mod('saikou_collections_1_title', 'Saikou')); ?></h3>
                <p class="text-gray-600 font-darker-grotesque mb-6"><?php echo esc_html(get_theme_mod('saikou_collections_1_desc', 'Our flagship collection of full-sized, high-quality action figures—designed for fans who want more than just a toy. From anime action figures and superhero statues to gaming collectibles and legendary characters.')); ?></p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_1_tag1', 'Full-Size Glory')); ?></span>
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_1_tag2', 'Dynamic Poses')); ?></span>
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_1_tag3', 'Premium Finishes')); ?></span>
                </div>
            </div>
            <div class="bg-white rounded-lg p-8 shadow-lg">
                <h3 class="text-2xl font-space-grotesk font-bold text-saikou-secondary mb-4"><?php echo esc_html(get_theme_mod('saikou_collections_2_title', 'Ikon')); ?></h3>
                <p class="text-gray-600 font-darker-grotesque mb-6"><?php echo esc_html(get_theme_mod('saikou_collections_2_desc', 'Our exclusive collection of premium bust-style collectible figures—designed to deliver high-impact character presence in a compact, display-friendly format. Perfect for collectors, desk displays, or gifting.')); ?></p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_2_tag1', 'Bust-Style')); ?></span>
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_2_tag2', 'Compact Display')); ?></span>
                    <span class="bg-saikou-primary text-saikou-secondary px-3 py-1 rounded-full text-sm font-darker-grotesque font-medium"><?php echo esc_html(get_theme_mod('saikou_collections_2_tag3', 'Bold Style')); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section id="products" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-space-grotesk font-bold text-center text-saikou-secondary mb-12"><?php echo esc_html(get_theme_mod('saikou_products_title', 'Featured Products')); ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3,
                'meta_query' => array(
                    array(
                        'key' => '_stock_status',
                        'value' => 'instock',
                        'compare' => '=',
                    ),
                ),
            );
            $products = new WP_Query($args);
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    global $product;
                    $product_id = $product->get_id();
                    $image_id = $product->get_image_id();
                    $image_url = $image_id ? wp_get_attachment_url($image_id) : wc_placeholder_img_src();
                    $badge = '';
                    if ($product->is_on_sale()) {
                        $badge = '<span class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded text-xs font-darker-grotesque font-semibold">Sale</span>';
                    } elseif ($product->is_featured()) {
                        $badge = '<span class="absolute top-4 right-4 bg-saikou-accent text-white px-2 py-1 rounded text-xs font-darker-grotesque font-semibold">Featured</span>';
                    }
                    ?>
                    <div class="bg-saikou-background rounded-lg overflow-hidden shadow-lg">
                        <div class="relative aspect-square bg-white p-4">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($product->get_name()); ?>" class="w-full h-full object-contain">
                            <?php echo $badge; ?>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-space-grotesk font-semibold text-saikou-secondary mb-2"><?php the_title(); ?></h3>
                            <p class="text-sm text-gray-600 font-darker-grotesque mb-2"><?php echo esc_html($product->get_short_description()); ?></p>
                            <p class="text-2xl font-space-grotesk font-bold text-saikou-accent mb-4"><?php echo $product->get_price_html(); ?></p>
                            <p class="text-gray-600 font-darker-grotesque mb-6"><?php echo esc_html(wp_trim_words($product->get_description(), 20, '...')); ?></p>
                            <div class="flex gap-2">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="flex-1 bg-saikou-primary text-saikou-secondary text-center py-3 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all">
                                    View Details
                                </a>
                                <button class="bg-saikou-accent text-white px-6 py-3 rounded-lg font-darker-grotesque font-semibold hover:bg-opacity-80 transition-all add-to-cart" data-product-id="<?php echo esc_attr($product_id); ?>">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-gray-600 font-darker-grotesque text-center col-span-3"><?php _e('No products found.', 'saikou'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 bg-saikou-background">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-space-grotesk font-bold text-saikou-secondary mb-8"><?php echo esc_html(get_theme_mod('saikou_about_title', 'Who We Are')); ?></h2>
            <div class="text-lg text-gray-700 font-darker-grotesque space-y-6">
                <?php echo wp_kses_post(get_theme_mod('saikou_about_content', '<p class="font-semibold">At Saikou, we\'re not just making action figures—we\'re bringing your favorite characters to life, one sculpt at a time.</p><p>Born out of pure fandom and frustration (ever paid way too much for a flimsy imported figure?) Saikou was created to give Indian fans the quality they deserve—without the wait, the customs drama, or the disappointing paint jobs.</p><p>From anime action figures and superhero collectibles to gaming icons and mythical legends, everything we make is built with care, crafted in India, and designed to look damn good on your shelf. Whether you\'re a serious collector or just searching for the perfect gift, we make characters that feel personal—and figures that feel premium.</p><p class="italic">We sweat the small stuff. We obsess over details. And yes, we take way too long perfecting things. But that\'s what happens when you\'re fans first, makers second.</p><div class="bg-saikou-primary p-6 rounded-lg mt-8"><p class="font-space-grotesk font-bold text-saikou-secondary">Welcome to Saikou. Collectibles that actually live up to the hype.</p></div>')); ?>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-saikou-secondary">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-space-grotesk font-bold text-white mb-4"><?php echo esc_html(get_theme_mod('saikou_newsletter_title', 'Help Us Make Cooler Stuff')); ?></h2>
        <p class="text-lg text-gray-300 font-darker-grotesque mb-8"><?php echo esc_html(get_theme_mod('saikou_newsletter_desc', 'New figurines loading... Smash that "Notify Me" button like it owes you money!')); ?></p>
        <form class="max-w-md mx-auto flex gap-4" id="newsletter-form">
            <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-lg font-darker-grotesque" required>
            <button type="submit" class="bg-saikou-primary text-saikou-secondary px-8 py-3 rounded-lg font-darker-grotesque font-semibold hover:bg-saikou-accent hover:text-white transition-all">
                Notify Me
            </button>
        </form>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-space-grotesk font-bold text-center text-saikou-secondary mb-12"><?php echo esc_html(get_theme_mod('saikou_contact_title', 'Contact Us')); ?></h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <h3 class="font-space-grotesk font-semibold text-saikou-secondary mb-2">Company</h3>
                <p class="text-gray-600 font-darker-grotesque"><?php bloginfo('name'); ?></p>
            </div>
            <div class="text-center">
                <h3 class="font-space-grotesk font-semibold text-saikou-secondary mb-2">Phone</h3>
                <p class="text-gray-600 font-darker-grotesque"><?php echo esc_html(get_theme_mod('saikou_phone', '92742 38391')); ?></p>
            </div>
            <div class="text-center">
                <h3 class="font-space-grotesk font-semibold text-saikou-secondary mb-2">Email</h3>
                <p class="text-gray-600 font-darker-grotesque">
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('saikou_email', 'info@saikoushop.com')); ?>" class="hover:text-saikou-accent"><?php echo esc_html(get_theme_mod('saikou_email', 'info@saikoushop.com')); ?></a><br>
                    <a href="mailto:care@saikoushop.com" class="hover:text-saikou-accent">care@saikoushop.com</a>
                </p>
            </div>
            <div class="text-center">
                <h3 class="font-space-grotesk font-semibold text-saikou-secondary mb-2">Location</h3>
                <p class="text-gray-600 font-darker-grotesque"><?php echo esc_html(get_theme_mod('saikou_address', 'India')); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Cart Notification -->
<div id="cart-notification" class="fixed top-20 right-4 bg-saikou-primary text-saikou-secondary p-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
    <p class="font-darker-grotesque font-semibold">Item added to cart!</p>
</div>

<?php get_footer(); ?>
