<?php get_header(); ?>
<div class="slideIn sub-page__hdl-wrap">

        <h1 class="sub-page__hdl none-page__hdl md-hdl fadeIn">Not Found..</h1>
        <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="none__main-inner">

<div class="container">

    <p class="sub-page__comment lg-font">
        アクセスしたURLのページが見つかりません。<br>
        お探しのページは、移動または削除された可能性があります。
    </p>

    <a href="<?php echo home_url(); ?>/works" class="archive__link-btn slide-bg">制作実績を見る</a>

</div>


</main>

<?php get_footer(); ?>