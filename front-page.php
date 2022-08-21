<?php get_header(); ?>
<div class="main-visual">
        <div class="container">
            <div class="main-visual__inner">
                <h1 class="page__hdl lg-hdl main-visual__title">I AM ENGINEER</h1>
                <strong class="page__lead sm-hdl">
                    ただ作るだけではなく、売上向上、アクセス増加<br>
                    に繋がるよう貢献したい。
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
                <h2 class="section__hdl about__hdl md-hdl">About</h2>
                <div class="section__inner">
                    <div class="profile-text__wrap">
                        <h3 class="profile-text__title xl-font"><span>私</span>について</h3>
                        <p class="profile__name lg-font">名前:荒井 勇己</p>
                        <p class="profile-text md-font">私は、東京都内のWeb制作会社でWebディレクターとして働きつつ、<br>副業でコーディングをしております。</p>
                        <br>
                        <p class="profile-text md-font">■できること</p>
                        <p class="profile-text md-font">・HTML/CSSコーディング・JavaScriptのアニメーション実装</p>
                        <p class="profile-text md-font">・Wordpress自作テーマ開発</p>
                        <p class="profile-text md-font">・Wordpress既存テーマカスタマイズ</p>
                        <p class="profile-text md-font">・C++プログラミング/シェルスクリプト</p>
                        <p class="profile-text md-font">・Webディレクション業務(スケジュール管理/品質管理など)</p>
                        <p class="profile-text md-font">・機能設計/テスト設計(コーポレートサイトレベル)</p>
                        <br>
                        <p class="profile-text md-font">■強み</p>
                        <p class="profile-text md-font">【自走力/行動力が強みです】</p>
                        <p class="profile-text md-font">・私は気になったらすぐに行動するタイプの人間です。YouTubeの広告がきっかけで独学でコーディングを始め、今ではWebコーディングで副業できるレベルになりました。特に誰にも先導されることなく、自ら考え学習を進めて来ました。</p>
                        <br>
                        <p class="profile-text md-font">■やりたいこと</p>
                        <p class="profile-text md-font">【ただ作るだけでなく、結果に繋がるようなサイト制作をしたいと思っております】</p>
                        <p class="profile-text md-font">・結果に繋がるようなサイト制作をするため、内部SEOに強い/アクセシビリティを意識したコーディングができるようになりたいです。</p>
                        <a href="./about" id="" class="lg-font link-text profile-text__link">View more</a>
                    </div>
                    <div class="profile-img__wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/profile_img.jpg'; ?>" alt="荒井 勇己" class="profile-img">
                    </div>                    
                </div>
            </div>
        </section>
    
        <!-- 制作事例 -->
        <section id="works">
            <div id="triangle" class="triangle"></div>
                <div class="container">
                    <h2 class="section__hdl works__hdl md-hdl">Works</h2>
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
                                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php echo CFS()->get( 'works_title' );?>" class="works__img">
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
                <h2 class="section__hdl skill__hdl md-hdl">My Skill</h2>
                    <div class="section__inner">
                    <ul class="skill__list">
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/web_create.png'; ?>" alt="コーディングのイメージ画像" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">Webサイトコーディング</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">                                        
                                        HTMLは適切なタグ(SEOに好ましい)を使用、CSSはSassを使用可能。
                                        JavaScriptでは、アニメーションの実装ができます。<br>
                                        使用言語: HTML/CSS(Sass)/<br>
                                        Java Script(jQuery)
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/wordpress.png'; ?>" alt="Wordpress" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">Wordpressサイト構築</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">
                                        Wordpressのオリジナルテーマの制作ができます。
                                        またプラグイン等を使い、内部SEO/セキュリティ対策/ページ読み込み速度向上も可能です。
                                        Wordpressの既存テーマを使用したサイト制作の経験もございます。<br>
                                        使用言語: HTML/CSS(Sass)/<br>
                                        Java Script(jQuery)/PHP
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/director.png'; ?>" alt="ディレクターのイメージ画像" class="skill__img">
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
                <h2 class="section__hdl contact__hdl md-hdl">Contact</h2>
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