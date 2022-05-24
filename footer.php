   <!-- フッター -->
   <footer id="footer">
        <div class="container">
            <h2 class="site__icon">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site__logo-link">
                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/logo.png'; ?>" alt="サイトロゴ" class="site__icon-img">
                </a>
            </h2>
        </div>
        <a id="scroll-top" ref="scrollTop" href="#body" v-smooth-scroll="{ duration: 2000, offset: -110 }">
            <img src="<?php echo esc_url( get_template_directory_uri() ). '/img/scrollTop.png'; ?>" alt="ページ上部にスクロール" class="scroll-top__image">
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
        // data: {
        //     isMove: false
        // },
        // mounted() {  

        //     window.addEventListener('load', this.getScrollBtn);
        //     window.addEventListener('load', this.moveScrollBtn);
        // },
        // methods: {
        //     getScrollBtn() {

        //         const scrollTop = this.$refs.scrollTop;
        //         const rect = scrollTop.getBoundingClientRect();
        //         console.log(rect.top);
        //         return rect.top;
        //     },
        //     moveScrollBtn() {

        //         console.log(rect.top);
        //     }
        // }
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