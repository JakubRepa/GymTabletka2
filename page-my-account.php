<? get_header(); ?>
<div class="mt-28 h-full min-h-[calc(100vh-8rem)] container mx-auto max-w-6xl py-8">
    <? echo do_shortcode('[woocommerce_my_account]'); ?>
</div>
<? get_footer(); ?>

<style>
    .woocommerce {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .woocommerce-account .woocommerce-MyAccount-navigation {
        width: unset !important;
        margin-bottom: 1rem;
    }

    .woocommerce-MyAccount-navigation ul {
        display: flex;
        gap: 20px;
    }

    .woocommerce-account .woocommerce-MyAccount-content {
        width: 100%;
    }
</style>