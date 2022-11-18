<?php
/*
Template Name: 自己紹介ページ
*/
?>
<?php get_header(); ?>

<div class="slideIn sub-page__hdl-wrap">
    <h1 class="sub-page__hdl about-page__hdl md-hdl fadeIn">About</h1>
    <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="about__main-inner">

        <div class="container">
            <section class="profile__sec">
    
                <h2 class="profile__hdl md-hdl yellow-line fade-in-text">Profile</h2>
    
                <div class="profile__inner">
                    <div class="profile-head">
                        <div class="profile-head__img-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/profile_img.jpg'; ?>" alt="荒井 勇己" class="profile-head__img">
                        </div>
                        <div class="profile-head__text">
                            <p class="profile__name lg-font">名前:荒井 勇己</p>
                            <p class="profile__age lg-font">年齢:26</p>
                        </div>
                    </div>
                    <div class="profile-text__detail">
                        <p class="profile__text md-font">
                            <?php echo CFS()->get( 'about_detail' );?>
                        </p>                    
                    </div>
                </div>
            </section>

            <section class="skill__sec">
                <h2 class="profile__hdl md-hdl yellow-line fade-in-text">Skill</h2>
                <table class="skill__table">
                    <tbody>
                        <tr>
                            <th>マークアップ</th>
                            <td>HTML/CSS(Sass)</td>
                        </tr>
                        <tr>
                            <th>フロントエンド</th>
                            <td>Java Script/jQuery/Vue.js/Vuetify</td>
                        </tr>
                        <tr>
                            <th>バックエンド</th>
                            <td>C++/PHP</td>
                        </tr>
                        <tr>
                            <th>バージョン管理</th>
                            <td>Git・SVN</td>
                        </tr>                        
                        <tr>
                            <th>デザインツール</th>
                            <td>Adobe XD・Photoshop・Illustrator/Figma</td>
                        </tr>
                        <tr>
                            <th>その他ツール</th>
                            <td>Firebase(Authentication, Hosting, Cloud Firestore, Cloud Storage),シェルスクリプト,Linuxコマンド</td>
                        </tr>
                        <tr>
                            <th>ディレクション</th>
                            <td>スケジュール管理・顧客折衝・品質管理・テスト設計・外部ベンダーのコントロール</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="strength__sec">
                <h2 class="strength__hdl md-hdl yellow-line fade-in-text">Strength</h2>
                <div class="strength__inner">
                    <div class="strength__text-box">
                        <h3 class="sm-hdl strength__text-box__hdl">1.自走力がある</h3>
                        <p class="md-font strength__text-box__text">                    
                            私は、コーディングを独学で始めました。スクールに通うことなく、自走して学習を進めました。わからないところはネットで調べるなどして、学習しておりました。その結果、副業でWordpressサイト制作の仕事をいただけるようになりました。最近は、Vue.jsの学習をし、自作アプリの開発を行いました。
                        </p>
                        <h3 class="sm-hdl strength__text-box__hdl">2.挑戦することができる</h3>
                        <p class="md-font strength__text-box__text">
                            1つ目とやや被りますが、私は挑戦することができます。「気になったことは手を出してみる。」という性格です。そのおかげで、コーディングに挑戦したり、苦手だった歌に挑戦することができました。
                        </p>
                        <h3 class="sm-hdl strength__text-box__hdl">3.スケジュール管理ができる</h3>
                        <p class="md-font strength__text-box__text">
                            私は「スケジュール管理」ができるエンジニアです。ですので、エンジニアによくある、「進捗状況が把握しづらい。」「納期の前日に間に合わないと報告されどうしようもなくなる」と言ったことは、私の場合ございません。具体的には、ディレクターがいつでも進捗状況を把握できるようにするため、以下のような進捗管理シートを使用しながら、コーディングを進めます。
                        </p>
                    </div>
                </div>
            </section>

        </div>

    </main>
<?php get_footer(); ?>