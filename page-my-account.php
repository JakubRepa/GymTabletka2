<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    body{
        padding-bottom:90px;
    }

    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
        padding-bottom:90px
    }

    form{
        width:200px;
    }
</style>