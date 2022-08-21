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
    
                <h2 class="profile__hdl md-hdl yellow-line">Profile</h2>
    
                <div class="profile__inner">
                    <div class="profile-head">
                        <div class="profile-head__img-wrap">
                            <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/profile_img.jpg'; ?>" alt="荒井 勇己" class="profile-head__img">
                        </div>
                        <div class="profile-head__text">
                            <p class="profile__name lg-font">名前:荒井 勇己</p>
                            <p class="profile__age lg-font">年齢:25</p>
                        </div>
                    </div>
                    <div class="profile-text__detail">
                        <p class="profile__text md-font">
                            <?php echo CFS()->get( 'about_detail' );?>
                        </p>                    
                    </div>
                </div>
            </section>
        </div>

    </main>
<?php get_footer(); ?>