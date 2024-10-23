<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;¨
        height:100vh;
    }

    form{
        width:500px;
    }
</style>