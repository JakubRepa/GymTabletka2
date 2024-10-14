<?php
/*
Template Name: Home Page
*/


get_header();
?>

<main>
    <div>
        <?php get_template_part('carousel'); ?>
        

        <div class="bg-[#F0F2F5] py-4">
            <div class="container flex justify-between max-w-5xl mx-auto">
                <div class="flex items-center space-x-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                            <path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                            <path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                            <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                        </svg>
                    </div>
                    <div>
                        <div class="-space-y-1">
                            <p class="text-lg font-bold"><?php the_field('gurantee_one'); ?></p>
                            <p><?php the_field('subtext_one'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-12">
                            <path fill-rule="evenodd" d="M11.99 2.243a4.49 4.49 0 0 0-3.398 1.55 4.49 4.49 0 0 0-3.497 1.306 4.491 4.491 0 0 0-1.307 3.498 4.491 4.491 0 0 0-1.548 3.397c0 1.357.6 2.573 1.548 3.397a4.491 4.491 0 0 0 1.307 3.498 4.49 4.49 0 0 0 3.498 1.307 4.49 4.49 0 0 0 3.397 1.549 4.49 4.49 0 0 0 3.397-1.549 4.49 4.49 0 0 0 3.497-1.307 4.491 4.491 0 0 0 1.306-3.497 4.491 4.491 0 0 0 1.55-3.398c0-1.357-.601-2.573-1.549-3.397a4.491 4.491 0 0 0-1.307-3.498 4.49 4.49 0 0 0-3.498-1.307 4.49 4.49 0 0 0-3.396-1.549Zm3.53 7.28a.75.75 0 0 0-1.06-1.06l-6 6a.75.75 0 1 0 1.06 1.06l6-6Zm-5.78-.905a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm4.5 4.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <div class="-space-y-1">
                            <p class="text-lg font-bold"><?php the_field('gurantee_two'); ?></p>
                            <p><?php the_field('subtext_two'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="moneyBackGuarantee" class="h-14">
                    </div>
                    <div>
                        <div class="-space-y-1">
                            <p class="text-lg font-bold"><?php the_field('gurantee_three'); ?></p>
                            <p><?php the_field('subtext_three'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>

    <div class="pt-24 pb-8 text-center">
        <h3 class="text-3xl font-bold">Our top sellers</h3>
    </div>

   <div class="container flex justify-between max-w-6xl mx-auto space-x-4 flex-nowrap" style="padding-bottom: 6.5rem;">
    <?php 
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) : 
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            
            // Retrieve ACF custom fields for product size and flavour
            $product_size = get_field('product_size');
            $product_flavour = get_field('product_flavour');
            ?>
            
            <div class="text-center">
                <div class="bg-[#F0F2F5] w-44 h-44 flex lg:flex-row flex-col items-center justify-center">
                    <a href="<?php the_permalink(); ?>" class="product-link">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-auto">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="No Image" class="h-24">
                        <?php endif; ?>
                    </a>
                </div>
                
                <!-- Product Title and Price -->
                <div class="pt-2">
                    <p class="font-bold"><?php the_title(); ?></p>
                    <span class="text-green-600"><?php echo $product->get_price_html(); ?></span>
                </div>
                
                <!-- Custom Fields: Product Size and Flavour -->
                <div class="pt-1 text-sm text-gray-600">
                    <?php if ($product_size) : ?>
                        <p><strong>Size:</strong> <?php echo $product_size; ?></p>
                    <?php endif; ?>
                    
                    <?php if ($product_flavour) : ?>
                        <p><strong>Flavour:</strong> <?php echo $product_flavour; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <?php 
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No products found</p>';
    endif;
    ?>
</div>


        <div class="bg-[#F0F2F5] py-24">
            <div class="container flex justify-between max-w-6xl mx-auto">
                <div class="text-center w-full">
                    <h3 class="text-3xl font-bold pb-4">Don’t take our word for it</h3>
                    <p>See what our customers have to say</p>
                </div>
            </div>
            <div class="container flex justify-between max-w-7xl space-x-4 mx-auto pt-12">
                <?php 
                for ($i = 0; $i < 3; $i++) : ?>
                    <div class="w-full">
                        <div class="text-center pb-8">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/moneyBack.png" alt="NoImage" class="rounded-full h-24 w-24 mx-auto">
                        </div>
                        <div class="text-center max-w-3xl">
                            <p>Short description of the most popular category, Short description of the most popular category, Short description of the most popular category.</p>
                        </div>
                        <div class="text-center pt-8">
                            <p class="font-bold">John Doe</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="py-24">
            <div class="flex flex-col items-center justify-center w-full">
                <?php echo do_shortcode('[contact-form-7 id="8702c0a" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</main>
<style>
    html{
        margin-top: 0 !important;
    }
</style>

<?php get_footer(); ?>
