<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
    }

    form{
        width:500px;
        padding: 200px;
    }
</style>