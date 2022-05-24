<?php
/*
Template Name: 自己紹介ページ
*/
?>
<?php get_header(); ?>

<div class="slideIn sub-page__hdl-wrap">
    <h2 class="sub-page__hdl about-page__hdl md-hdl fadeIn">About</h2>
    <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<main class="about__main-inner">
        
        <section class="profile__sec">

            <h3 class="profile__hdl md-hdl yellow-line">Profile</h3>

            <div class="profile__inner">
                <div class="profile-head">
                    <div class="profile-head__img-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/profile.png'; ?>" alt="私の写真" class="profile-head__img">
                    </div>
                    <div class="profile-head__text">
                        <p class="profile__name lg-font">Name:荒井 勇己</p>
                        <p class="profile__age lg-font">AGE:26</p>
                    </div>
                </div>
                <div class="profile-text__detail">
                    <p class="profile__text md-font">
                        <?php echo CFS()->get( 'about_detail' );?>
                    </p>                    
                </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>