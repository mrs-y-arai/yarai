<?php get_header(); ?>
<div class="slideIn sub-page__hdl-wrap">
    <h2 class="sub-page__hdl works-page__hdl md-hdl fadeIn">Works</h2>
    <?php get_template_part('template-parts/bread-crumb'); ?>
</div>
<main>
    <div class="container">
        <div class="works-detail__item-wrap">
            <h2 class="works-detail__item-hdl md-hdl"><?php echo CFS()->get( 'works_title' );?></h2>
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
            <div class="works-detail__item-table-wrap">
                <table class="works-detail__item-table">
                    <tbody>
                        <tr><th>種別</th><td><?php echo CFS()->get( 'works_type' );?></td></tr>
                        <tr><th>対応範囲</th><td><?php echo CFS()->get( 'works_area' );?></td></tr>
                        <tr><th>使用ツール・言語</th><td><?php echo CFS()->get( 'works_tool' );?></td></tr>
                        <tr><th>ページボリューム</th><td><?php echo CFS()->get( 'works_volume' );?></td></tr>
                        <tr><th>URL(URLクリックでアクセス！)</th><td><a href="<?php echo CFS()->get( 'works_link' );?>" target="_blank" rel="noreferrer noopener"><?php echo CFS()->get( 'works_link' );?></a></td></tr>
                        <tr><th>Basic認証(ID/PASS)</th><td><?php echo CFS()->get( 'works_basic' );?></td></tr>
                        <tr><th>ポイント</th><td><?php echo CFS()->get( 'works_detail' );?></td></tr>
                    </tbody>
                </table>
            </div>


            <a href="<?php echo home_url(); ?>/works" class="archive__link-btn lg-font slide-bg">他の制作実績を見る</a>

        </div>

    </div>
</main>
<?php get_footer(); ?>