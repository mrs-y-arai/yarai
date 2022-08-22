   <!-- フッター -->
   <footer id="footer">
        <div class="container">
            <p class="site__icon">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site__logo-link">
                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/logo.png'; ?>" alt="サイトロゴ" class="site__icon-img">
                </a>
            </p>
        </div>
        <a id="scroll-top">
            <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/scrollTop.png'; ?>" alt="ページ上部にスクロール" class="scroll-top__image">
        </a>
    </footer> 
    </div> 
</body>
<?php wp_footer(); ?>
</html>