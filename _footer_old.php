   <!-- フッター -->
   <footer id="footer">
        <div class="container">
            <p class="site__icon">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site__logo-link">
                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/logo.png'; ?>" alt="サイトロゴ" class="site__icon-img">
                </a>
            </p>
        </div>
        <a id="scroll-top" ref="scrollTop" href="#body" v-smooth-scroll="{ duration: 2000, offset: -110 }">
            <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/scrollTop.png'; ?>" alt="ページ上部にスクロール" class="scroll-top__image">
        </a>
    </footer>  
</body>
<script src="https://cdn.jsdelivr.net/npm/vue-smooth-scroll@1.0.13/dist/vue-smooth-scroll.min.js"></script>
<script>
    // スムーススクロールライブラリの取り込み
    const vueSmoothScroll = window['VueSmoothScroll'];

    // スムーススクロールコンポーネントを使用する
    Vue.use(vueSmoothScroll);
    new Vue ({
        el: 'footer'
    });

    // ハンバーガーメニュー
    new Vue ({
        el: 'header',
        data: {
            isActive: false
        }
    });    

</script>
<?php wp_footer(); ?>
</html>