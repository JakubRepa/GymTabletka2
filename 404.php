<?php

/*
Template Name: 404 Page
*/

get_header(); ?>

<main>
    <div class="h-[75vh] justify-center items-center flex flex-col">
        <?php 
        // Získání stránky podle názvu "404 Page"
        $error_page = get_page_by_title('404 Page');
        
        // Kontrola, zda stránka existuje
        if ($error_page) {
            // Přesměrování na stránku
            wp_redirect(get_permalink($error_page->ID));
            exit; // Ukončení skriptu po přesměrování
        } else {
            // V případě, že stránka neexistuje, zobrazit defaultní 404 obsah
            ?>
            <p class="pb-8 text-5xl font-bold uppercase">
                404 - Page not found
            </p>
            <p class="max-w-md pb-4 text-lg text-center">
                The page you are looking for might have been removed, had its name changed or is temporarily unavailable.
            </p>
            <button class="bg-[#1D6EC1] text-white rounded-lg px-5 py-3">
                <a href="/" class="text-white no-underline">Go To Homepage</a>
            </button>
            <?php
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>

