<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    .woocommerce{
        display:flex;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
        margin-top: 178px; 
        margin-bottom: 90px; 
    }

    form{
        width:500px;
    }
</style>