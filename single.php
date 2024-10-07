<?php
/*
Template Name: Blog Post
*/

get_header(); ?>

<main>
    <div class="container max-w-6xl mx-auto">
        <!-- Custom Banner Image -->
        <div class="py-8">
            <?php
            // Fetch custom banner image from ACF
            $banner_image = get_field('banner_image');
            if ($banner_image) : ?>
                <img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" class="w-full h-[75vh]">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/default-banner.jpg" alt="Default Banner" class="w-full h-[75vh]">
            <?php endif; ?>
        </div>

        <!-- Custom Category Tags -->
        <div class="flex text-[#007db5] uppercase">
            <?php
            // Fetch custom category tags from ACF
            $category_tags = get_field('category_tags');
            if ($category_tags) :
                $tags_array = explode(',', $category_tags); // assuming the tags are comma-separated
                foreach ($tags_array as $tag) : ?>
                    <p class="font-bold"><?php echo esc_html(trim($tag)); ?>,&nbsp;</p>
                <?php endforeach;
            endif;
            ?>
        </div>

        <!-- Blog Post Title and Date -->
        <div class="pt-2">
            <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
            <div class="flex items-center pt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p class="pl-1 font-bold"><?php echo get_the_date(); ?></p>
            </div>
        </div>

        <!-- Dynamic Gutenberg Content -->
        <div class="py-4">
            <?php
            // Display content edited in Gutenberg
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>

        <!-- Authored By Section -->
        <div class="-space-y-1">
            <p class="font-bold">Authored by <span class="text-[#007db5] italic"><?php the_author(); ?></span></p>
            <p class="font-bold text-[#007db5]">Diet and healthy lifestyle</p>
            <p class="font-bold"><?php echo get_the_date(); ?></p>
        </div>
    </div>

    <?php get_footer(); ?>
</main>
