<?php get_header(); ?>
<div class="main-visual">
        <div class="container">
            <div class="main-visual__inner">
                <h1 class="page__hdl lg-hdl main-visual__title fade-in-text">I AM ENGINEER</h1>
                <strong class="page__lead sm-hdl">
                    ただ作るだけではなく、売上向上、コスト削減など<br>
                    何かに貢献できる物づくりがしたい。
                </strong>
                <a href="./contact" class="xl-font top-works__link slide-bg">CONTACT</a>
            </div>
        </div>
    </div>

    <main>

        <!-- 私について -->
        <section id="about">
            <div id="triangle" class="triangle"></div>
            <div class="container">
                <h2 class="section__hdl about__hdl md-hdl fade-in-text">About</h2>
                <div class="section__inner">
                    <div class="profile-text__wrap">
                        <h3 class="profile-text__title xl-font"><span>私</span>について</h3>
                        <p class="profile__name lg-font">名前:荒井 勇己</p>
                        <p class="profile-text md-font">私は、東京都内の会社でWebディレクターとして働きつつ、<br>副業でプログラミングをしております。</p>
                        <br>
                        <p class="profile-text md-font">■できること</p>
                        <p class="profile-text md-font">・HTML/CSSコーディング/アニメーション作成</p>
                        <p class="profile-text md-font">・プログラミング(JavaScript/Vue.js/gulp.js/C++/シェルスクリプトなど)</p>
                        <p class="profile-text md-font">・PHPによる、Wordpress自作テーマ開発/Wordpress既存テーマカスタマイズ</p>                        
                        <p class="profile-text md-font">・Webディレクション(顧客折衝/スケジュール管理/品質管理など。受注額1000万円台の案件のディレクション経験あり)</p>
                        <p class="profile-text md-font">・機能設計/テスト設計(コーポレートサイトレベル)</p>
                        <br>
                        <p class="profile-text md-font">■強み</p>
                        <p class="profile-text md-font">【自走力/行動力が強みです】</p>
                        <p class="profile-text md-font">・私は気になったらすぐに行動するタイプの人間です。YouTubeの広告がきっかけで独学でコーディングを始め、今ではWebコーディングで副業できるレベルになりました。特に誰にも先導されることなく、自ら考え学習を進めて来ました。</p>
                        <br>
                        <p class="profile-text md-font">■やりたいこと</p>
                        <p class="profile-text md-font">・コーポレートサイト制作やLP制作ではなく、Webサービス・システム開発・メディアサイトなどの開発力が必要な開発をしたいと思っております。</p>
                        <p class="profile-text md-font">・また、コスト削減や売り上げ増加など何かに貢献できている事を感じられるような、物づくりをしたいと思っております。</p>
                        <a href="./about" id="" class="lg-font link-text profile-text__link">View more</a>
                    </div>
                    <div class="profile-img__wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/profile_img.jpg'; ?>" alt="荒井 勇己" class="profile-img">
                    </div>                    
                </div>
            </div>
        </section>
    
        <!-- 制作事例 -->
        <section id="works">
            <div id="triangle" class="triangle"></div>
                <div class="container">
                    <h2 class="section__hdl works__hdl md-hdl fade-in-text">Works</h2>
                    <div class="section__inner">
                        <ul class="works__list">

                        <?php
                        global $post;
                        $args = array(
                        'paged' => $paged,
                        'post_status' => 'publish', //公開の記事だけ
                        'orderby' => 'date', //日付を出力する基準
                        'order' => 'DESC', //表示する順番（逆はASC）
                        'posts_per_page' => 3 
                        );
                        $my_query = new WP_Query( $args );
                        if( $my_query -> have_posts() ) :
                        while($my_query -> have_posts()) : $my_query -> the_post();
                        ?>

                            <li class="works__item">
                                <div class="works__img-wrap">
                                    <a href="<?php the_permalink(); ?>" class="works__img-link">
                                        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
                                    </a>
                                </div>
                                <div class="works__description">
                                    <h3 class="works__item-hdl sm-hdl"><?php echo CFS()->get( 'works_title' );?></h3>
                                    <p class="works__description-text md-font">
                                        <?php echo CFS()->get( 'works_summarize' );?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="works__item-link link-text lg-font">View more</a>
                                </div>
                            </li>

                            <?php endwhile; //------------繰り返しここまで---------- 
                            ?>                
                        </ul>

                        <?php else : //記事が無い場合 
                            ?>
                            <div class="result">
                                <p>商品ががまだありません</p>
                            </div>
                                
                        <?php endif; ?>

                        <a href="./works" id="works__link" class="lg-font slide-bg">MORE</a>
                    </div>
                </div>
        </section>        
    
        <!-- 私ができること -->
        <section id="skill">
            <div id="triangle" class="triangle"></div>
            <div class="container">
                <h2 class="section__hdl skill__hdl md-hdl fade-in-text">My Skill</h2>
                    <div class="section__inner">
                    <ul class="skill__list">
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/programming.png'; ?>" alt="プログラミングのイメージ画像" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">プログラミング</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">                                        
                                        HTML/CSSコーディング(SEOを意識したタグの使用/Sassの使用/BEM記法ベース)<br>
                                        JavaScript/jQuery/Vue.js(アニメーション実装・自作アプリ開発)<br>
                                        C++・Linux(システム開発・大手通信キャリアでの大規模開発経験)                                        
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/wordpress.png'; ?>" alt="Wordpress" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">Wordpressサイト構築</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">
                                        Wordpressのオリジナルテーマの制作ができます。
                                        またプラグイン等を使い、内部SEO/セキュリティ対策/ページ読み込み速度向上も可能です。
                                        Wordpressの既存テーマを使用したサイト制作の経験もございます。<br>
                                        使用言語: HTML/CSS(Sass)/<br>
                                        Java Script(jQuery・Vue.js)/PHP
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/director.png'; ?>" alt="ディレクターのイメージ画像" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">Webディレクション</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">
                                        現在、Web制作会社でWebディレクションをしております。
                                        スケジュール管理・品質管理・顧客折衝などの経験がございます。
                                        ディレクション経験があるので、エンジニアとしても、スケジュール感を持った動きができます。
                                    </p>
                                </div>
                            </li>                            
                        </ul>
                    </div>
            </div>
        </section>
    
        
    
        <!-- お問い合わせ -->
        <section id="contact">
            <div id="triangle" class="triangle"></div>
            <div class="container">
                <h2 class="section__hdl contact__hdl md-hdl fade-in-text">Contact</h2>
                <div class="section__inner">
                    <p class="section__text contact__text md-font">
                        お気軽にお問い合わせください。
                    </p>
                    <p class="section__text contact__text md-font">
                        メールアドレス<br>araiyuuuki96@yahoo.co.jp
                    </p>
                    <a href="./contact" id="contact__link" class="lg-font  slide-bg">CONTACT</a>
                    <!-- <div class="contact__wrap">
                    </div> -->
                </div>
            </div>
            
        </section>

    </main>
<?php get_footer(); ?>