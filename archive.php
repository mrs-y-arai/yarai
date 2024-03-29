<?php get_header(); ?>
<div class="slideIn sub-page__hdl-wrap">

        <h1 class="sub-page__hdl works-page__hdl md-hdl fadeIn">Works</h1>
        <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="works__main-inner">

<div class="container">

    <p class="sub-page__comment lg-font">
        制作事例を紹介しています。
        自作アプリ・コーポレートサイト・Wordpressサイトなどのコーディングの経験がございます。
        制作事例として掲載できませんが、大手通信キャリアにて、大規模なシステム開発に参画した経験もございます。
    </p>

    <ul class="works__list">

        <?php if ( have_posts() ): ?>
                
        <?php while ( have_posts() ) : the_post(); ?>
        

        <li class="works__item">
            <div class="works__item-wrap">
                <div class="works__img-wrap">
                    <a href="<?php the_permalink(); ?>" class="works__img-link">
                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
                    </a>
                </div>
                <div class="works__description-wrap">
                    <h2 class="works__item-hdl sm-hdl"><?php echo CFS()->get( 'works_title' );?></h2>
                    <p class="works__description md-font">
                        <?php echo CFS()->get( 'works_summarize' );?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="works__link link-text lg-font">View more</a>
                </div>
            </div>
        </li>

        <?php endwhile; ?>

    </ul>

    <?php
    // 「pagenation」という関数が定義されていれば呼び出す
    if( function_exists('pagenation') ){ 
        pagenation();
    }
    ?>

    <?php else:?>

    <h2 class="archive-page__single--not">記事はありません。</h2>

    <?php endif ?>

</div>


</main>
<?php get_footer(); ?>