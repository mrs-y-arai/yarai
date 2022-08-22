<!DOCTYPE html>
<html class="front-html" lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5JWXMDJMZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-T5JWXMDJMZ');
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Spinnaker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6cc9eb75ff.js" crossorigin="anonymous"></script>

    <!-- パンくず構造化データ -->
    <?php if( is_page('8') ) {?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://smz97hiro.xsrv.jp/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "About",
            "item": "https://smz97hiro.xsrv.jp/about/"  
        }]
        }
        </script>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "Person",
        "name": "荒井 勇己",
        "url": "https://smz97hiro.xsrv.jp/",
        "image": "https://smz97hiro.xsrv.jp/wp-content/themes/y_arai/img/profile.png",
        "sameAs": "https://twitter.com/yuu_a_prog",
        "jobTitle": "Webエンジニア"  
        }
        </script>
    <?php }elseif( is_page('10') ) { ?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://smz97hiro.xsrv.jp/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "contact",
            "item": "https://smz97hiro.xsrv.jp/contact/"  
        }]
        }
        </script>
    <?php }elseif( is_archive() ) { ?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://smz97hiro.xsrv.jp/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Works",
            "item": "https://smz97hiro.xsrv.jp/works/"  
        }]
        }
        </script>    
    <?php }elseif( is_single() ){?>
        <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://smz97hiro.xsrv.jp/"  
        },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Works",
            "item": "https://smz97hiro.xsrv.jp/works/"  
        },{
            "@type": "ListItem", 
            "position": 3, 
            "name": "<?php the_title(); ?>",
            "item": "<?php the_permalink(); ?>"  
        }]
        }
        </script>
    <?php } ?>
</head>
<body id="body" <?php if( is_front_page()) :?>
    class="top-page"
<?php endif; ?>>
<div id="global-wrapper">
    <header>
        <div class="container">
            <div class="header__inner">
                <p class="site__icon">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site__logo-link">
                        <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/logo.png'; ?>" alt="サイトロゴ" class="site__icon-img">
                    </a>
                </p>
                
                <div class="hamburger-menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>

                <div class="yellow-modal"></div>

                <nav class="pc__nav">
                    <?php
                        wp_nav_menu(
                            array(
                                'depth' =>1,
                                'menu_class' =>'header__nav-list',
                                'theme_location' =>'global',
                                'container' =>false,
                            )
                        );
                    ?>                   
                </nav>
                
                <nav class="mobile__nav" v-bind:class="{'nav---active':isActive}">
                    <?php
                        wp_nav_menu(
                            array(
                                'depth' =>1,
                                'menu_class' =>'mobile-header__nav-list',
                                'theme_location' =>'mobile',
                                'container' =>false,
                            )
                        );
                    ?>                   
                </nav>
            </div>
        </div>
    </header>
