<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    body{
        height:75vh;
    }
    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
    }

    form{
        width:500px;
    }
</style>