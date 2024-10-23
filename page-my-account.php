<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    body{
        margin-top: 75vh;
    }

    form{
        width:50%;
        display:flex;
        flex-direction:column;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
    }
</style>