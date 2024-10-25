<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Version
 */

 /*
Template Name: Footer
*/
?>

<?php
$loop= new WP_Query(array(
    'post_type' => 'footer',
    'posts_per_page' => 1
));
while($loop->have_posts()) : $loop->the_post();
?>

<footer class="bg-[#232F3E] pt-8">
    <div class="container flex justify-between max-w-6xl mx-auto">
        <div class="flex flex-col space-y-1 text-[#bdc1c5]">
            <p class="pb-1 text-lg font-bold text-white"> <?php the_field('terms_title'); ?></p>
            <a href="#"><?php the_field('term1'); ?></a>
            <a href="#"><?php the_field('term2'); ?></a>
            <a href="#"><?php the_field('term3'); ?></a>
            <a href="#"><?php the_field('term4'); ?></a>
            <a href="#"><?php the_field('term5'); ?></a>
            <a href="#"><?php the_field('term6'); ?></a>
            <a href="#"><?php the_field('term7'); ?></a>            
        </div>
        <div class="flex flex-col justify-start text-white">
            <p class="text-lg font-bold text-white">
            <?php the_field('help_title'); ?>
            </p>
            <p class="text-[#bdc1c5]">
            <?php the_field('help_text'); ?>
            </p>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                </svg>
                <p class="pl-2 font-bold text-[#bdc1c5]">
                <?php the_field('contact_number'); ?>
                </p>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                    <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                </svg>
                <p class="pl-2 font-bold text-[#bdc1c5]">
                <?php the_field('contact_email'); ?>
                </p>
            </div>
        </div>
        <div class="text-[#bdc1c5]">
            <div class="pb-4 text-4xl font-bold text-white">GymTabletka</div>
            <p><?php the_field('company_name'); ?></p>
            <p><?php the_field('company_address'); ?></p>
            <p><?php the_field('company_city'); ?></p>
            <div class="flex items-center pt-4">
                <svg id='Facebook_24' width='40' height='40' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.83 0 0 0.83 12 12)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(189,193,197); fill-rule: nonzero; opacity: 1;" transform=" translate(-15, -14.94)" d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 21.016 7.432 25.984 13.206 26.852 L 13.206 18.18 L 10.237 18.18 L 10.237 15.026 L 13.206 15.026 L 13.206 12.927 C 13.206 9.452 14.899 7.927 17.787 7.927 C 19.169999999999998 7.927 19.902 8.03 20.247999999999998 8.075999999999999 L 20.247999999999998 10.828999999999999 L 18.278 10.828999999999999 C 17.052 10.828999999999999 16.624 11.991999999999999 16.624 13.302 L 16.624 15.026 L 20.217 15.026 L 19.73 18.18 L 16.624000000000002 18.18 L 16.624000000000002 26.877 C 22.481 26.083 27 21.075 27 15 C 27 8.373 21.627 3 15 3 z" stroke-linecap="round" />
                    </g>
                </svg>
                <svg id='Instagram_Circle_24' width='40' height='40' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.77 0 0 0.77 12 12)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(189,193,197); fill-rule: nonzero; opacity: 1;" transform=" translate(-15, -15)" d="M 15 2 C 7.832 2 2 7.832 2 15 C 2 22.168 7.832 28 15 28 C 22.168 28 28 22.168 28 15 C 28 7.832 22.168 2 15 2 z M 11.666016 6 L 18.332031 6 C 21.457031 6 24 8.5420156 24 11.666016 L 24 18.332031 C 24 21.457031 21.457984 24 18.333984 24 L 11.667969 24 C 8.5429688 24 6 21.457984 6 18.333984 L 6 11.667969 C 6 8.5429688 8.5420156 6 11.666016 6 z M 11.666016 8 C 9.6450156 8 8 9.6459688 8 11.667969 L 8 18.333984 C 8 20.354984 9.6459688 22 11.667969 22 L 18.333984 22 C 20.354984 22 22 20.354031 22 18.332031 L 22 11.666016 C 22 9.6450156 20.354031 8 18.332031 8 L 11.666016 8 z M 19.667969 9.6660156 C 20.035969 9.6660156 20.333984 9.9640312 20.333984 10.332031 C 20.333984 10.700031 20.035969 11 19.667969 11 C 19.299969 11 19 10.700031 19 10.332031 C 19 9.9640312 19.299969 9.6660156 19.667969 9.6660156 z M 15 10 C 17.757 10 20 12.243 20 15 C 20 17.757 17.757 20 15 20 C 12.243 20 10 17.757 10 15 C 10 12.243 12.243 10 15 10 z M 15 12 C 13.34314575050762 12 12 13.34314575050762 12 15 C 12 16.65685424949238 13.34314575050762 18 15 18 C 16.65685424949238 18 18 16.65685424949238 18 15 C 18 13.34314575050762 16.65685424949238 12 15 12 z" stroke-linecap="round" />
                    </g>
                </svg>
                <svg id='TwitterX_24' width='35' height='35' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.53 0 0 0.53 12 12)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(189,193,197); fill-rule: nonzero; opacity: 1;" transform=" translate(-24.96, -25)" d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z" stroke-linecap="round" />
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="container flex justify-between max-w-6xl py-8 mx-auto">
        <div class="flex items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/googleLogo.png" alt="GoogleLogo" class="w-16 h-auto">
            <p class="text-[#bdc1c5] pl-1 font-bold"><?php the_field('company_name'); ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="#F9BF3B" class="size-5">
                <path fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z" clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="#F9BF3B" class="size-5">
                <path fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z" clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="#F9BF3B" class="size-5">
                <path fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z" clip-rule="evenodd" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15" fill="#F9BF3B" class="size-5">
                <path fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z" clip-rule="evenodd" />
            </svg>
            <p class="text-[#bdc1c5] pl-1"><?php the_field('reviews'); ?></p>
        </div>
        <div class="flex space-x-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/visa.jpg" alt="VISA" class="h-auto rounded-md w-14">
            <img src="<?php echo get_template_directory_uri(); ?>/images/visa.jpg" alt="VISA" class="h-auto rounded-md w-14">
            <img src="<?php echo get_template_directory_uri(); ?>/images/visa.jpg" alt="VISA" class="h-auto rounded-md w-14">
            <img src="<?php echo get_template_directory_uri(); ?>/images/visa.jpg" alt="VISA" class="h-auto rounded-md w-14">
        </div>
    </div>
</footer>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php wp_footer(); ?>
</body>
</html>