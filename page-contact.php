<?php
/*
Template Name: お問い合わせページ
*/
?>
<?php get_header(); ?>

<div class="slideIn sub-page__hdl-wrap">
    <h2 class="sub-page__hdl about-page__hdl md-hdl fadeIn">Contact</h2>
    <?php get_template_part('template-parts/bread-crumb'); ?>
</div>

<div id="contact__area">
    <?php echo do_shortcode( '[contact-form-7 id="38" title="お問い合わせ"]' ); ?>
</div>

<?php get_footer(); ?>