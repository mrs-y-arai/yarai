<?php get_header(); ?>
<div class="main-visual">
        <div class="container">
            <div class="main-visual__inner">
                <h2 class="page__hdl lg-hdl">I AM ENGINEER</h2>
                <h3 class="page__lead sm-hdl">
                    ただ作るだけではなく、売上向上、アクセス増加<br>
                    に繋がるよう貢献したい。
                </h3>
                <a href="./contact" id="top-works__link" class="xl-font">お問い合わせ</a>
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
                        <p class="profile__name lg-font">Name:Yuki Arai</p>
                        <p class="profile-text md-font">私は、東京都内のWeb制作会社で働いております。</p>
                        <p class="profile-text md-font"><span class="strong-font" >コーポレートサイト制作、LP制作、Wordpressサイトのコーディング</span>ができます</p>
                        <p class="profile-text md-font">また、<span class="strong-font" >SNS運用</span>や<span class="strong-font" >ブログの運用</span>なども好きなので、その経験が活かせたらなと思っております。</p>
                        <p class="profile-text md-font">ただ作るだけでなく、<span class="strong-font" >売り上げ増加に影響するような</span>仕事をしたいと思っております。</p>
                    </div>
                    <div class="yellow-bg"></div>
                </div>
                <a href="./about" id="about__link" class="lg-font">MORE</a>
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
                                                <a href="<?php the_permalink(); ?>" class="works__item-link">サイトの詳細へ ></a>
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

                                <a href="./works" id="works__link" class="lg-font">MORE</a>
                            </div>
                </div>
        </section>

        <!-- <section id="price">
            <div id="triangle" class="triangle"></div>
            <div class="container">
                <h2 class="section__hdl price__hdl md-hdl">Price</h2>
                <div class="price__description-wrap">
                    <p class="price__description md-font">
                        料金は<span class="strong-font">幅広いメニュー</span>を用意しております。
                    </p>
                    <p class="price__description md-font">
                        LP制作、Wordpress制作、<br class="sp-br">デザイン込みの制作の料金ほか。
                    </p>
                    <p class="price__description md-font">
                        既存サイトのWordpress化、<br class="sp-br">レスポンシブ化、修正のみの料金
                    </p>
                    <p class="price__description md-font">
                        Wordpress自作テーマの場合の料金、<br class="sp-br">既存テーマを使用した場合の料金なども、記載しております。
                    </p>
                </div>
                <div class="price_link-wrap">
                    <p class="price__link-description md-font">
                        興味がありましたら、以下の料金表ページをご覧ください。
                    </p>
                    <a href="./price.html" class="price-table__link">料金表</a>
                </div>
            </div>
        </section> -->
    
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
                                        HTMLは適切なタグ(SEOに好ましい)を使用、CSSはSassでメンテナンス性を高め、
                                        JavaScriptでアニメーションや、その他動的な機能の実装ができます。
                                        Wordpressは、オリジナルテーマの作成、既存テーマ(snow monkey、lightning pro)からの作成も可能です。
                                        また、プラグインで内部SEOの設定/サイト軽量化なども致します。<br>
                                        使用言語: HTML/CSS(Sass)/Java Script(jQuery)/PHP
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/director.png'; ?>" alt="ディレクターのイメージ画像" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">Wevディレクション</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">
                                        現在、Web制作会社でWebディレクションをしております。
                                        スケジュール管理・品質管理・顧客折衝などの経験がございます。
                                    </p>
                                </div>
                            </li>
                            <li class="skill__item">
                                <div class="skill__img-wrap">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/note.png'; ?>" alt="コンテンツ販売のイメージ画像" class="skill__img">
                                    <h3 class="skill__item-hdl sm-hdl">SNSやブログの運用</h3>
                                </div>
                                <div class="skill__description">
                                    <p class="skill__description-text md-font">
                                        私は、SNS(Twitter)運用をし、
                                        noteやbrainを使ったコンテンツ販売で、最高月18万円程稼ぎました。
                                        始めは無料で配布していたコンテンツを、最終的に1万円で売れるようになりました。
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <!-- <a href="./price.html" id="price__link" class="lg-font">料金表</a> -->
                    </div>
            </div>
        </section>
    
        
    
        <!-- お問い合わせ -->
        <section id="contact">
            <div id="triangle" class="triangle"></div>
            <div class="container">
                <h2 class="section__hdl contact__hdl md-hdl">Contact</h2>
                <div class="section__inner">
                    <div class="contact__wrap">
                        <!-- <p class="section__text contact__text md-font">
                            24時間、いつでもお気軽にお問い合わせよろしくお願いします。
                        </p> -->
                        <p class="section__text contact__text md-font">
                            メールアドレス<br>araiyuuuki96@yahoo.co.jp
                        </p>
                        <a href="./contact" id="contact__link" class="lg-font">CONTACT</a>
                    </div>
                </div>
            </div>
            
        </section>

    </main>
<?php get_footer(); ?>