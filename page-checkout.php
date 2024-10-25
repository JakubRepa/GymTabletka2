<? get_header(); ?>
<div class="mt-32 h-full min-h-[calc(100vh-8rem)] container mx-auto">
    <? echo do_shortcode('[woocommerce_checkout]'); ?>
</div>
<? get_footer(); ?>

<h1>
    cs
</h1>

<style>
    .woocommerce {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 200px;
    }

    form {
        width: 500px;
        margin-top: 200px;
        margin-bottom: 110px;
    }

    ul {
        display: flex;
        width: full;
    }

    li {
        display: flex;
        width: full;
    }
</style>