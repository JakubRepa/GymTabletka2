<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body <?php body_class(); ?>>

<?php
$loop= new WP_Query(array(
    'post_type' => 'header',
    'posts_per_page' => 1
));
while($loop->have_posts()) : $loop->the_post();
?>

    <div class="bg-[#232F3E] text-[#FFFFFF] py-4 navbar">
        <div class="container flex items-center justify-between max-w-6xl mx-auto">
            <div class="text-4xl font-bold">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="font-bold text-white">GymTabletka</a>
            </div>
            <div class="flex flex-col">
                <div class="relative -mx-8">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-[#99A0A7]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required />
                </div>
                <div class="pt-4 space-x-6 uppercase">
                    <a href="<?php echo esc_url(home_url('/product-category/sport-nutrition/')); ?>" class="font-bold text-white"><?php the_field('sport_nutrition'); ?></a>
                    <a href="<?php echo esc_url(home_url('/product-category/fitness-food/')); ?>" class="font-bold text-white"><?php the_field('fitness_food'); ?></a>
                    <a href="<?php echo esc_url(home_url('/product-category/sportswear/')); ?>" class="font-bold text-white"><?php the_field('sportswear'); ?></a>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="font-bold text-[#F9BF3B]">Blog</a>
                </div>
            </div>
            <div class="flex space-x-2">
                <a href="<?php echo esc_url(home_url('/my-account')); ?>" class="font-bold text-[#F9BF3B]">
                <img src="<?php echo get_template_directory_uri(); ?>/images/userIcon.png" alt="UserIcon" class="w-auto h-10">
                </a>
                <a href="<?php echo esc_url(home_url('/basket')); ?>" class="font-bold text-[#F9BF3B]">
                <img src="<?php echo get_template_directory_uri(); ?>/images/basketIcon.png" alt="BasketIcon" class="w-auto h-10">
                </a>
                <ul><?php pll_the_languages(); ?></ul>
            </div>
        </div>
    </div>

    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 112px;
            z-index: 1000; /* Dostačující hodnota, aby byl navbar nad carousel */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Lehce zvýrazní hranici */
        }

    </style>

    <?php
    if ( has_nav_menu( 'primary' ) ) :
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
        ) );
    endif;
    ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

