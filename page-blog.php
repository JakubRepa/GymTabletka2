<?php
/*
 Template Name: Blog
*/

get_header(); ?>

<main>

    <div>

        <!-- Kategorie filtrování -->
        <div class="container max-w-6xl pt-8 mx-auto">
            <div class="text-lg font-bold text-white">
                <?php
                // Získání všech kategorií
                $categories = get_categories();
                foreach ($categories as $category) :
                    // Pokud je aktivní, zvýraznit tlačítko
                    $is_active = (isset($_GET['category']) && $_GET['category'] === $category->slug) ? 'text-yellow-500' : '';
                    ?>
                    <button 
                        class="bg-[#232F3E] rounded-lg py-2 px-4 uppercase mr-4 <?php echo $is_active; ?>"
                        onclick="window.location.href='<?php echo esc_url(add_query_arg('category', $category->slug)); ?>'">
                        <?php echo esc_html($category->name); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Zobrazení příspěvků -->
        <div class="container max-w-6xl mx-auto">
            <h1 class="pt-12 text-6xl font-bold text-black">All blog posts</h1>
            <p class="pt-8">
                <!-- Text pro všechny příspěvky -->
                Všechny příspěvky k dané kategorii.
            </p>
        </div>

        <div class="container max-w-6xl pt-4 mx-auto">
            <?php
            // Dotaz na příspěvky z vybrané kategorie
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'category_name' => isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '',
            );
            $query = new WP_Query($args);

            // Výpis příspěvků
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="flex mb-4">
                        <div class="bg-[#F0F2F5] rounded-lg flex items-center justify-center max-w-sm mr-2">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'w-auto h-auto max-w-full max-h-full')); ?>
                            <?php endif; ?>
                        </div>
                        <div class="flex bg-[#F0F2F5] rounded-lg p-8 ml-2 w-full justify-between">
                            <div class="max-w-lg">
                                <h2 class="pb-4 text-3xl font-bold"><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="flex items-end">
                                <button class="bg-[#1D6EC1] text-white rounded-lg px-5 py-3">
                                    <a href="<?php the_permalink(); ?>" class="text-white no-underline">Read More</a>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
