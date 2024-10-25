<?php get_header(); ?>

<?php echo do_shortcode('[product_category]'); ?>

<?php get_footer(); ?>

<style>
    .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
        width: unset !important;
    }
</style>