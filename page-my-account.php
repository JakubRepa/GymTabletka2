<?php get_header(); ?>

    <?php echo do_shortcode('[woocommerce_my_account]'); ?>

<?php get_footer(); ?>
<style>
    .woocommerce {
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        font-family: 'Poppins', sans-serif;
        margin-top: 200px; 
        margin-bottom: 110px;         
    }

    .woocommerce-MyAccount-navigation {
        width:full;
        display:flex;
    }

    .woocommerce-account .woocommerce-MyAccount-navigation {
        width: unset !important;
    }

    nav {
        width:full;
    }

    form {
        width:500px;
        margin-top: 200px; 
        margin-bottom: 110px; 
    }

    ul {
        display:flex;
        gap:20px;
    }

    li {
        display:flex;
        width:full;
    }

</style>