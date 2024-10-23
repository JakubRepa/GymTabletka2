<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    body{
        margin-bottom:50vh;
    }

    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
        padding-bottom:90px
    }

    form{
        width:500px;
    }
</style>