<?php get_header(); ?>
<div class="slideIn sub-page__hdl-wrap">

        <h2 class="sub-page__hdl none-page__hdl md-hdl fadeIn">Not Found..</h2>
        <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="none__main-inner">

<div class="container">

    <p class="sub-page__comment lg-font">
        アクセスしたURLのページが見つかりません。<br>
        お探しのページは、移動または削除された可能性があります。
    </p>

    <a href="<?php echo home_url(); ?>/works" class="archive__link-btn">制作実績を見る</a>

</div>


</main>

<?php get_footer(); ?>