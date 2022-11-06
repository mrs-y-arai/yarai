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

        <!-- チャットボットリンク -->
        <div class="chat-bot__link-wrap">
            <div class="chat-bot__close">
                <p class="chat-bot__close__text">×</p>
            </div>
            <a href="https://portforio-chat-bot.web.app/" class="chat-bot__link" target="_blank" rel="noopener noreferrer">            
                <div class="chat-bot__img-wrap">
                    <img src="<?php echo esc_url( get_template_directory_uri() ). '/public/assets/img/chatbot.png'; ?>" alt="チャットボットを始める" class="chat-bot__img">
                </div>
                <p class="chat-bot__text">Click to ask</p>
            </a>
        </div>
    </div> 
</body>
<?php wp_footer(); ?>
</html>