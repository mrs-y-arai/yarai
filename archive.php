<?php get_header(); ?>
<div class="slideIn sub-page__hdl-wrap">

        <h2 class="sub-page__hdl works-page__hdl md-hdl fadeIn">Works</h2>
        <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="works__main-inner">

<div class="container">

    <p class="sub-page__comment lg-font">
        制作事例を紹介しています。
        コーポレートサイト・ランディングページ・Wordpressなどのコーディングの経験がございます。
    </p>

    <ul class="works__list">

        <?php if ( have_posts() ): ?>
                
        <?php while ( have_posts() ) : the_post(); ?>

        <!-- <li class="works__item">
            <a target="_blank" href="<?php echo CFS()->get( 'works_link' );?>" class="works__item-link">
                <div class="works__img-wrap">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
                </div>
                <div class="works__description-wrap">
                    <h3 class="works__item-hdl sm-hdl"><?php echo CFS()->get( 'works_title' );?></h3>
                    <p class="works__description md-font">
                        <?php echo CFS()->get( 'works_detail' );?>
                    </p>
                </div>
                <p class="works__link">サイトを見る</p>
            </a>
        </li> -->

        <li class="works__item">
            <div class="works__item-wrap">
                <div class="works__img-wrap">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
                </div>
                <div class="works__description-wrap">
                    <h3 class="works__item-hdl sm-hdl"><?php echo CFS()->get( 'works_title' );?></h3>
                    <p class="works__description md-font">
                        <?php echo CFS()->get( 'works_summarize' );?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="works__link">サイトの詳細へ ></a>
                </div>
            </div>
        </li>

        <?php endwhile; ?>       

    </ul>

    <?php else:?>

    <h2 class="archive-page__single--not">記事はありません。</h2>

    <?php endif ?>

</div>


</main>
<?php get_footer(); ?>